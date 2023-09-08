<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetListRequest extends AbstractRequest
{
    public ?\DateTimeImmutable $startDate = null;

    public ?\DateTimeImmutable $endDate = null;

    public ?array $filters = [];

    public ?bool $viewBusy = true;

    public ?array $busyUserIdList = null;

    public ?bool $viewEmptyEvents = true;

    public ?array $calendarEventIdList = [];

    public ?bool $genRecOccurrences = true;

    public int $modifiedAfter = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('calendar.event.GetList');
    }
}
