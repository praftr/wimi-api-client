<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Reporting\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class TagsRequest extends AbstractRequest
{
    public ?array $tasksLists = [];

    public ?array $tagList = [];

    public int $amount = 0;

    public ?int $order = 1;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('reporting.task.Tags');
    }
}