<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Meeting\Meeting;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveParticipantsRequest extends AbstractRequest
{
    public array $userIdList;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $meetingId,
    ) {
        parent::__construct('meeting.meeting.RemoveParticipants');
    }
}
