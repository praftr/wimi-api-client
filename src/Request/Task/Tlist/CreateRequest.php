<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Tlist;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateRequest extends AbstractRequest
{
    public string $label;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('task.tlist.Create');
    }
}
