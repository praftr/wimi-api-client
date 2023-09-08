<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Trash;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RestoreFileRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $fileIdList,
    ) {
        parent::__construct('document.trash.RestoreFile');
    }
}
