<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Subtask;

use Praftr\WimiApiClient\Request\AbstractRequest;

class MoveRequest extends AbstractRequest
{
    public int $position;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskId,
        protected readonly int $subtaskId,
    ) {
        parent::__construct('task.subtask.Move');
    }
}
