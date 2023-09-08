<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetListUnifiedRequest extends AbstractRequest
{
    public \DateTimeImmutable $startDate;

    public \DateTimeImmutable $endDate;

    public ?array $filters = [];

    public ?array $projectIdList = null;

    public ?array $userIdList = null;

    public ?bool $genRecOccurrences = true;

    public ?bool $viewEmptyEvents = true;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('calendar.event.GetListUnified');
    }
}
