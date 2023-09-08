<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class MoveToGarbageCollectorRequest extends AbstractRequest
{
    public ?bool $force = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $fileIdList,
    ) {
        parent::__construct('document.file.MoveToGarbageCollector');
    }
}
