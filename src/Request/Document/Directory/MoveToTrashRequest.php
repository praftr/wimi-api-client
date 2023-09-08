<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class MoveToTrashRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $dirIdList,
    ) {
        parent::__construct('document.directory.MoveToTrash');
    }
}
