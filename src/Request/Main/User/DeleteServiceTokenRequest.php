<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DeleteServiceTokenRequest extends AbstractRequest
{
    public string $serviceSecret;

    public string $serviceToken;

    public function __construct(
    ) {
        parent::__construct('main.user.DeleteServiceToken');
    }
}
