<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Praftr\WimiApiClient\Request\RequestInterface;
use Psr\Http\Client\ClientInterface;

class ApiClient
{
    private const BASE_URL = 'https://api.wimi.pro/';
    private const MSG_KEY = 'php-wimi-api-client';
    private const API_VERSION = '1.2';

    private string $token = '';

    public function __construct(
        private readonly string $accountName,
        private readonly string $username,
        private readonly string $password,
        private readonly string $appToken,
        private ?ClientInterface $httpClient = null,
    ) {
        $this->httpClient = $httpClient ?? new Client();
    }

    /**
     * @param RequestInterface $request
     * @return array Data part of the decoded json response
     * @throws ApiClientException
     */
    public function handle(RequestInterface $request): array
    {
        if ($this->token === '') {
            $this->login();
        }

        $header = array_merge(
            [
                'api_version' => self::API_VERSION,
                'msg_key' => self::MSG_KEY,
                'app_token' => $this->appToken,
                'token' => $this->token,
            ],
            $request->getHeader(),
        );
        $body = [
            'data' => $request->getData(),
        ];

        return $this->sendRequest($header, $body)['body']['data'];
    }

    private function sendRequest(array $header, array $body): array
    {
        $request = new Request(
            'POST',
            self::BASE_URL,
            ['Content-Type' => 'application/json; charset=utf8'],
            json_encode(['header' => $header, 'body' => $body], 512, JSON_THROW_ON_ERROR),
        );

        $response = $this->httpClient->sendRequest($request);

        $content = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        if (isset($content['body']['error'])) {
            throw new ApiClientException($content['body']['error']['str'], $content['header']['target']);
        }

        return $content;
    }

    private function login(): void
    {
        $content = $this->sendRequest(
            [
                'target' => 'auth.user.Login',
                'identification' => [
                    'account_name' => $this->accountName,
                ],
                'auth' => [
                    'login' => $this->username,
                    'password' => $this->password,
                ],
                'api_version' => self::API_VERSION,
                'app_token' => $this->appToken,
                'msg_key' => self::MSG_KEY,
            ],
            [
                'list_projects' => false,
                'projects_auth' => true,
                'projects_stats' => false,
                'projects_tasks_stats' => false,
                'projects_users' => false,
                'manual' => false,
                'token' => "",
                'fetch_pwd_sha' => false,
            ],
        );

        $this->token = $content['header']['token'];
    }
}
