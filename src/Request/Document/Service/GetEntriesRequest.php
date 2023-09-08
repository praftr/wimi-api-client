<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Service;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetEntriesRequest extends AbstractRequest
{
    public string $service;

    public ?string $folderRef = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('document.service.GetEntries');
    }
}
