<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Task;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GenerateWOGeneralFileRequest extends AbstractRequest
{
    public string $name;

    public string $fileFormat;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $taskId,
    ) {
        parent::__construct('task.task.GenerateWOGeneralFile');
    }
}
