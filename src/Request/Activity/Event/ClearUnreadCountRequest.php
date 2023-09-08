<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Activity\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ClearUnreadCountRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('activity.event.ClearUnreadCount');
    }
}
