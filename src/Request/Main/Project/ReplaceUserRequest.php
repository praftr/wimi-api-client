<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Project;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ReplaceUserRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $userSourceId,
        protected readonly int $userTargetId,
    ) {
        parent::__construct('main.project.ReplaceUser');
    }
}
