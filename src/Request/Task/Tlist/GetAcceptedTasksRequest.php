<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Tlist;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetAcceptedTasksRequest extends AbstractRequest
{
    public ?int $listId = null;

    public int $offset;

    public int $limit;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('task.tlist.GetAcceptedTasks');
    }
}
