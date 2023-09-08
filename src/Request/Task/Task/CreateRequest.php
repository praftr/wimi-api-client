<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateRequest extends AbstractRequest
{
    public string $label;

    public ?string $description = "";

    public int $position = 0;

    public int $status = 0;

    public ?\DateTimeImmutable $creationDate = null;

    public int $creationUser = 0;

    public ?\DateTimeImmutable $beginDate = null;

    public ?\DateTimeImmutable $dueDate = null;

    public int $weight = 0;

    public ?string $weightUnit = "";

    public ?array $owners = [];

    public ?\DateTimeImmutable $startDate = null;

    public int $startUser = 0;

    public ?\DateTimeImmutable $completionDate = null;

    public int $completionUser = 0;

    public ?\DateTimeImmutable $acceptedDate = null;

    public int $acceptedUser = 0;

    public ?\DateTimeImmutable $updateDate = null;

    public ?array $tags = [];

    public ?bool $forceOwners = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskListId,
        protected readonly ?string $apiKey = "",
    ) {
        parent::__construct('task.task.Create');
    }
}
