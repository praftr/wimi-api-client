<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveExternalAttachmentRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $calendarEventId,
        protected readonly int $attachmentId,
    ) {
        parent::__construct('calendar.event.RemoveExternalAttachment');
    }
}
