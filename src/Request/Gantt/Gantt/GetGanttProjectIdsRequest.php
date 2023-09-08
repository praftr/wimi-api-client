<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Gantt\Gantt;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetGanttProjectIdsRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('gantt.gantt.GetGanttProjectIds');
    }
}
