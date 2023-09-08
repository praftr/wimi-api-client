<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Filter;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ListUnifiedRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('task.filter.ListUnified');
    }
}
