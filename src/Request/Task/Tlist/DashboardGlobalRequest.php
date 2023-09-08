<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Tlist;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DashboardGlobalRequest extends AbstractRequest
{
    public ?bool $withoutTasks = true;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('task.tlist.DashboardGlobal');
    }
}
