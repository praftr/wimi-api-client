<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveReminderRequest extends AbstractRequest
{
    public int $reminder;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskId,
    ) {
        parent::__construct('task.task.RemoveReminder');
    }
}
