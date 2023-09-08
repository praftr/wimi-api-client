<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Subtask;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateRequest extends AbstractRequest
{
    public string $label;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $subtaskId,
    ) {
        parent::__construct('task.subtask.Update');
    }
}
