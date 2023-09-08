<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GuestLinkRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileId,
    ) {
        parent::__construct('document.file.GuestLink');
    }
}
