<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Reporting\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BurndownRequest extends AbstractRequest
{
    public ?array $tasksLists = [];

    public ?string $period = "week";

    public ?string $unit = "hours";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('reporting.task.Burndown');
    }
}
