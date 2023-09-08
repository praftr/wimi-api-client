<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Meeting\Meeting;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditRequest extends AbstractRequest
{
    public ?string $name = "";

    public ?string $place = "";

    public ?string $description = "";

    public ?bool $notifyAvailability = true;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $meetingId,
    ) {
        parent::__construct('meeting.meeting.Edit');
    }
}
