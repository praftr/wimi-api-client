<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetSubscriptionLinkRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('calendar.event.GetSubscriptionLink');
    }
}
