<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Sharing\Sharing;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DownloadFileRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $fileId,
        protected readonly string $sharingFileCode,
    ) {
        parent::__construct('sharing.sharing.DownloadFile');
    }
}
