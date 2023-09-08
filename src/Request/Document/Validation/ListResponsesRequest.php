<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Validation;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ListResponsesRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('document.validation.ListResponses');
    }
}
