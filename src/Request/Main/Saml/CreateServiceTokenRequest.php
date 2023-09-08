<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Saml;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateServiceTokenRequest extends AbstractRequest
{
    public string $serviceName;

    public function __construct(
        protected readonly int $accountId,
        protected readonly string $accessToken,
    ) {
        parent::__construct('main.saml.CreateServiceToken');
    }
}
