<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Filter;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DeleteRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $filterId,
    ) {
        parent::__construct('task.filter.Delete');
    }
}
