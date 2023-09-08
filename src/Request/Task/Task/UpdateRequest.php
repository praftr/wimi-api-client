<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateRequest extends AbstractRequest
{
    public ?string $label = null;

    public ?string $description = "";

    public ?int $taskListId = null;

    public int $status = 0;

    public ?\DateTimeImmutable $beginDate = null;

    public ?\DateTimeImmutable $dueDate = null;

    public int $weight = 0;

    public ?string $weightUnit = "";

    public ?array $reminders = [];

    public ?array $owners = [];

    public ?bool $enableDefaultOverdueAlert = true;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskId,
    ) {
        parent::__construct('task.task.Update');
    }
}
