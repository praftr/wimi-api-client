<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Validation;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddValidatorsToRequestRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileMasterId,
        protected readonly int $requestId,
        protected readonly array $userIdList,
    ) {
        parent::__construct('document.validation.AddValidatorsToRequest');
    }
}
