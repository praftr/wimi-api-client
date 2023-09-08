<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CheckConflictsRequest extends AbstractRequest
{
    public string $fileName;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId = null,
    ) {
        parent::__construct('document.file.CheckConflicts');
    }
}
