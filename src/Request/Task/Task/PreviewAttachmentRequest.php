<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PreviewAttachmentRequest extends AbstractRequest
{
    public ?string $previewType = "default";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskId,
        protected readonly int $attachmentId,
    ) {
        parent::__construct('task.task.PreviewAttachment');
    }
}
