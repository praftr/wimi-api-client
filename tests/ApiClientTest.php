<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Praftr\WimiApiClient\ApiClient;
use Praftr\WimiApiClient\ApiClientException;
use Praftr\WimiApiClient\Request\Main\Account\GetProjectsRequest;
use Psr\Http\Client\ClientInterface;

class ApiClientTest extends TestCase
{
    public function testLogin(): void
    {
        $expectedLoginResponseContent = <<<JSON
{
	"header": {
		"target": "auth.user.login.info",
		"identification": {
			"account_name": "php-wimi-api-client"
		},
		"api_version": "1.2",
		"locale": "fr-fr",
		"msg_key": "",
		"token": "token"
	},
	"body": {
		"data": {
			"user": {
				"user_id": 1028642
			}
		}
	}
}
JSON;
        $expectedLoginResponse = new Response(200, [], $expectedLoginResponseContent);

        $expectedProjectsReponseContent = <<<JSON
{
	"header": {
		"target": "main.account.GetProjects.info",
		"identification": {
			"account_id": "230923",
			"user_id": "1028642"
		},
		"api_version": "1.2",
		"locale": "fr-fr",
		"msg_key": ""
	},
	"body": {
		"data": {
			"projects": [
				{
					"project_id": 1
                },
                {
					"project_id": 2
                }
            ]
        }
    }
}
JSON;
        $expectedProjectsReponse = new Response(200, [], $expectedProjectsReponseContent);

        $httpClientMock = $this->createMock(ClientInterface::class);
        $httpClientMock->method('sendRequest')->willReturnOnConsecutiveCalls($expectedLoginResponse, $expectedProjectsReponse);

        $client = new ApiClient(
            'account_name',
            'username',
            'password',
            'app_token',
            $httpClientMock,
        );

        $response = $client->handle(new GetProjectsRequest(1, 1));

        $this->assertSame(
            [
                'projects' => [
                    [
                        'project_id' => 1,
                    ],
                    [
                        'project_id' => 2,
                    ],
                ],
            ],
            $response,
        );
    }

    public function testExceptionIsThrownWhenApiReturnError(): void
    {
        $expectedLoginResponseContent = <<<JSON
{
	"header": {
		"target": "auth.user.login.info",
		"identification": {
			"account_name": "qualiretraite"
		},
		"api_version": "1.2",
		"locale": "fr-fr",
		"msg_key": "php-wimi-api-client"
	},
	"body": {
		"error": {
			"str": "Unauthorized"
		}
	}
}
JSON;
        $expectedLoginResponse = new Response(200, [], $expectedLoginResponseContent);

        $httpClientMock = $this->createMock(ClientInterface::class);
        $httpClientMock->method('sendRequest')->willReturn($expectedLoginResponse);

        $client = new ApiClient(
            'account_name',
            'username',
            'password',
            'app_token',
            $httpClientMock,
        );

        $this->expectException(ApiClientException::class);
        $this->expectExceptionMessage('Unauthorized: "auth.user.login.info"');

        $client->handle(new GetProjectsRequest(1, 1));
    }
}
