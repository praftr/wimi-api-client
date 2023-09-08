<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Template;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ListForAccountRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('document.template.ListForAccount');
    }
}
