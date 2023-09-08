<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Sharing;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ActivateRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $dirId,
    ) {
        parent::__construct('document.sharing.Activate');
    }
}