<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ExportUsersRequest extends AbstractRequest
{
    public ?string $fileName = "users";

    public ?string $format = "csv";

    public ?string $delimiter = ";";

    public ?string $enclosure = '"';

    public ?string $charset = "UTF-8";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.ExportUsers');
    }
}
