<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ToggleThirdPartyServiceRequest extends AbstractRequest
{
    public string $service;

    public bool $enable;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.ToggleThirdPartyService');
    }
}
