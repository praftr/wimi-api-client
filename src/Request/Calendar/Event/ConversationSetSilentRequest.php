<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ConversationSetSilentRequest extends AbstractRequest
{
    public bool $silent;

    public ?\DateTimeImmutable $silentUntil = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $calendarEventId,
    ) {
        parent::__construct('calendar.event.ConversationSetSilent');
    }
}
