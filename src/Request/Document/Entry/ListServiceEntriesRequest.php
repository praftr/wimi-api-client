<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Entry;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ListServiceEntriesRequest extends AbstractRequest
{
    public ?string $cloudReference = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId = null,
    ) {
        parent::__construct('document.entry.ListServiceEntries');
    }
}
