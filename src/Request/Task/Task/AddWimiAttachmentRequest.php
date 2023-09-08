<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddWimiAttachmentRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskId,
        protected readonly int $fileId,
    ) {
        parent::__construct('task.task.AddWimiAttachment');
    }
}
