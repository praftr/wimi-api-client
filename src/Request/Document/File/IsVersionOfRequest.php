<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class IsVersionOfRequest extends AbstractRequest
{
    public string $fileMd5;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $fileId,
    ) {
        parent::__construct('document.file.IsVersionOf');
    }
}
