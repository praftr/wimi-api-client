<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateLimitedTokenForServiceRequest extends AbstractRequest
{
    public string $serviceSecret;

    public string $serviceToken;

    public array $apiList;

    public function __construct(
    ) {
        parent::__construct('main.user.CreateLimitedTokenForService');
    }
}
