<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Gantt\Gantt;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveGanttLinkBetweenProjectsRequest extends AbstractRequest
{
    public int $relationTypeId;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $sourceId,
        protected readonly int $targetId,
    ) {
        parent::__construct('gantt.gantt.RemoveGanttLinkBetweenProjects');
    }
}
