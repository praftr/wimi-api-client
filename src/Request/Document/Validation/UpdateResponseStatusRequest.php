<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Validation;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateResponseStatusRequest extends AbstractRequest
{
    public int $status;

    public ?string $comment = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileMasterId,
        protected readonly int $requestId,
        protected readonly int $responseId,
    ) {
        parent::__construct('document.validation.UpdateResponseStatus');
    }
}
