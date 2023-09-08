<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Project;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetDriveSyncRequest extends AbstractRequest
{
    public bool $enable;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('main.project.SetDriveSync');
    }
}
