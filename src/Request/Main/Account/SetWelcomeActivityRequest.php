<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetWelcomeActivityRequest extends AbstractRequest
{
    public ?string $welcomeActivity = "";

    public int $welcomeInterest;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.SetWelcomeActivity');
    }
}
