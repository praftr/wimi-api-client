<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class MoveLinkRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId,
        protected readonly array $linkIdList,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('document.directory.MoveLink');
    }
}
