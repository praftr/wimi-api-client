<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Gantt\Gantt;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BatchRemoveListRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $taskListIdList,
    ) {
        parent::__construct('gantt.gantt.BatchRemoveList');
    }
}
