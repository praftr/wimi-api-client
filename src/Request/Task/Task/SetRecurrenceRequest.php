<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetRecurrenceRequest extends AbstractRequest
{
    public int $startDate;

    public ?int $creationTriggerDays = 1;

    public string $timezone;

    public string $freq;

    public int $count = 0;

    public ?int $until = null;

    public ?int $interval = 1;

    public ?array $byday = [];

    public ?array $bymonthday = [];

    public ?array $bymonth = [];

    public ?array $bysetpos = [];

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskId,
    ) {
        parent::__construct('task.task.SetRecurrence');
    }
}
