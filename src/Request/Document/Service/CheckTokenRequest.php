<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Service;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CheckTokenRequest extends AbstractRequest
{
    public string $service;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('document.service.CheckToken');
    }
}
