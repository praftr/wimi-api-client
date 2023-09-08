<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Entry;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetProjectTreeRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('document.entry.GetProjectTree');
    }
}
