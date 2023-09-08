<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Service;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BringBackRequest extends AbstractRequest
{
    public string $service;

    public ?string $format = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileId,
        protected readonly ?int $dirId = null,
    ) {
        parent::__construct('document.service.BringBack');
    }
}
