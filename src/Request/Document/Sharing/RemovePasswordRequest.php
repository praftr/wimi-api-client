<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Sharing;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemovePasswordRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly string $sharingCode,
    ) {
        parent::__construct('document.sharing.RemovePassword');
    }
}
