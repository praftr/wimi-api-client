<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ImportUsersFromCSVRequest extends AbstractRequest
{
    public ?bool $upsert = false;

    public string $name;

    public int $size;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.ImportUsersFromCSV');
    }
}
