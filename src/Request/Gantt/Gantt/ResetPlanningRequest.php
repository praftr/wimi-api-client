<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Gantt\Gantt;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ResetPlanningRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly array $taskListIdList,
        protected readonly int $taskIdList,
    ) {
        parent::__construct('gantt.gantt.ResetPlanning');
    }
}
