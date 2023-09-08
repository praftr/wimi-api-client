<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Meeting\Meeting;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateStatusRequest extends AbstractRequest
{
    public int $status;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $meetingId,
        protected readonly int $dateId,
    ) {
        parent::__construct('meeting.meeting.UpdateStatus');
    }
}
