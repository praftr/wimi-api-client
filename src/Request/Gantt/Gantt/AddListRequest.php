<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Gantt\Gantt;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddListRequest extends AbstractRequest
{
    public int $line;

    public ?int $startDate = null;

    public ?int $endDate = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskListId,
    ) {
        parent::__construct('gantt.gantt.AddList');
    }
}
