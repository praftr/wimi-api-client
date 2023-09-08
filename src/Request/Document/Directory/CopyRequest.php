<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CopyRequest extends AbstractRequest
{
    public string $name;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $dirId,
        protected readonly ?int $destDirId = null,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('document.directory.Copy');
    }
}
