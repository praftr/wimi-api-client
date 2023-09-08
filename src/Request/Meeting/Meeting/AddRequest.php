<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Meeting\Meeting;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddRequest extends AbstractRequest
{
    public ?array $userIdList = [];

    public ?array $extUserList = [];

    public string $name;

    public string $place;

    public ?string $description = "";

    public array $dates;

    public ?bool $notifyAvailability = true;

    public ?bool $notifyCreation = true;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('meeting.meeting.Add');
    }
}
