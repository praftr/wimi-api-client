<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CopyListRequest extends AbstractRequest
{
    public ?bool $copyMeta = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?array $fileIdList = [],
        protected readonly ?int $targetProjectId = null,
        protected readonly ?int $destDirId = null,
    ) {
        parent::__construct('document.file.CopyList');
    }
}
