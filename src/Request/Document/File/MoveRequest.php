<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class MoveRequest extends AbstractRequest
{
    public ?string $operation = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId,
        protected readonly array $fileIdList,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('document.file.Move');
    }
}
