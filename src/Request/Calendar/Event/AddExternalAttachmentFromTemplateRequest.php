<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Calendar\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddExternalAttachmentFromTemplateRequest extends AbstractRequest
{
    public string $name;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $calendarEventId,
        protected readonly int $fileTemplateId,
    ) {
        parent::__construct('calendar.event.AddExternalAttachmentFromTemplate');
    }
}
