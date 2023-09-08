<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LinkPathInfoRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $linkId,
    ) {
        parent::__construct('document.directory.LinkPathInfo');
    }
}
