<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\General_file;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetOnlineEditionGeneralFileTokenRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $generalFileId,
    ) {
        parent::__construct('document.general_file.GetOnlineEditionGeneralFileToken');
    }
}
