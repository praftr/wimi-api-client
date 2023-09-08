<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Filter;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ApplyRequest extends AbstractRequest
{
    public ?string $title = "";

    public ?array $lists = [];

    public ?array $tags = [];

    public ?string $tagsLogic = "";

    public ?array $owners = [];

    public ?array $statuses = [];

    public ?bool $late = false;

    public ?bool $lastOccurrences = false;

    public ?bool $afterListEndDate = false;

    public ?bool $orderByGroup = false;

    public ?array $personalizedEntriesFilters = [];

    public ?string $dateOption = null;

    public ?int $datesDelay = null;

    public ?string $taskOrderBy = "deadline";

    public ?string $taskOrder = "ASC";

    public ?string $workspaceOrderBy = "name";

    public ?string $workspaceOrder = "ASC";

    public ?int $page = 1;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('task.filter.Apply');
    }
}
