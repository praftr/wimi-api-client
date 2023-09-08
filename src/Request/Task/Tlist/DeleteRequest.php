<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Tlist;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DeleteRequest extends AbstractRequest
{
    public ?bool $deleteTasks = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskListId,
    ) {
        parent::__construct('task.tlist.Delete');
    }
}
