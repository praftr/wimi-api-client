<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Service;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LinkDirsRequest extends AbstractRequest
{
    public string $service;

    public int $dirs;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId = null,
    ) {
        parent::__construct('document.service.LinkDirs');
    }
}
