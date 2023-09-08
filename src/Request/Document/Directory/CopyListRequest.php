<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CopyListRequest extends AbstractRequest
{
    public ?bool $copyMeta = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $dirIdList,
        protected readonly ?int $destDirId = null,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('document.directory.CopyList');
    }
}
