<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Subtask;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveOwnersRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $subtaskId,
        protected readonly int $taskId,
        protected readonly array $userIdList,
    ) {
        parent::__construct('task.subtask.RemoveOwners');
    }
}
