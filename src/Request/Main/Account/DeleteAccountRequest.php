<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DeleteAccountRequest extends AbstractRequest
{
    public ?string $reason = "";

    public ?string $password = null;

    public ?string $accountName = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.DeleteAccount');
    }
}
