<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Validation;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateRequestStatusRequest extends AbstractRequest
{
    public int $status;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileMasterId,
        protected readonly int $requestId,
    ) {
        parent::__construct('document.validation.UpdateRequestStatus');
    }
}
