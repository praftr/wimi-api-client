<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Filter;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddRequest extends AbstractRequest
{
    public string $name;

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

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('task.filter.Add');
    }
}
