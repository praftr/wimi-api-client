<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Activity\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ExportAsCSVRequest extends AbstractRequest
{
    public ?\DateTimeImmutable $minDate = null;

    public ?\DateTimeImmutable $maxDate = null;

    public ?array $typeList = [];

    public ?string $csvDelimiter = ";";

    public ?string $csvEnclosure = '"';

    public ?array $userIdList = [];

    public ?string $filter = "";

    public ?bool $withAccountEvent = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly array $projectIdList,
    ) {
        parent::__construct('activity.event.ExportAsCSV');
    }
}
