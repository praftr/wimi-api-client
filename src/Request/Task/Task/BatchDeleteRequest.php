<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BatchDeleteRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskIdList,
    ) {
        parent::__construct('task.task.BatchDelete');
    }
}
