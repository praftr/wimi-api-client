<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Tlist;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveLinkRequest extends AbstractRequest
{
    public int $relationTypeId;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $sourceTaskListId,
        protected readonly int $targetTaskListId,
    ) {
        parent::__construct('task.tlist.RemoveLink');
    }
}
