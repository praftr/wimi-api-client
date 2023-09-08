<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ChangeInviteStatusRequest extends AbstractRequest
{
    public int $status;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $calendarEventId,
        protected readonly ?\DateTimeImmutable $recurrenceId = null,
    ) {
        parent::__construct('calendar.event.ChangeInviteStatus');
    }
}
