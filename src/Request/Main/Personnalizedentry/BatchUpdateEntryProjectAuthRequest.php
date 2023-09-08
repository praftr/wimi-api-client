<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Personnalizedentry;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BatchUpdateEntryProjectAuthRequest extends AbstractRequest
{
    public int $projectId;

    public array $entryIdList;

    public ?int $documents = -1;

    public ?int $tasks = -1;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.personnalizedentry.BatchUpdateEntryProjectAuth');
    }
}
