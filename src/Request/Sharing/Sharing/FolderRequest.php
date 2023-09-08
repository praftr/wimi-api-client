<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Sharing\Sharing;

use Praftr\WimiApiClient\Request\AbstractRequest;

class FolderRequest extends AbstractRequest
{
    public ?string $sharingPwd = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $dirId,
        protected readonly string $sharingCode,
    ) {
        parent::__construct('sharing.sharing.Folder');
    }
}
