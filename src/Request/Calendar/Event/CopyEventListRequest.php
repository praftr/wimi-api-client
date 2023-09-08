<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CopyEventListRequest extends AbstractRequest
{
    public ?int $recurrenceIdList = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $calendarEventIdList,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('calendar.event.CopyEventList');
    }
}
