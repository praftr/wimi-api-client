<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Personnalizedentry;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BatchUpdateEntryAccessRequest extends AbstractRequest
{
    public array $entryIdList;

    public string $object;

    public bool $auth;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.personnalizedentry.BatchUpdateEntryAccess');
    }
}
