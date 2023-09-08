<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Meeting\Meeting;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddExternalParticipantsRequest extends AbstractRequest
{
    public array $extUserList;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $meetingId,
    ) {
        parent::__construct('meeting.meeting.AddExternalParticipants');
    }
}
