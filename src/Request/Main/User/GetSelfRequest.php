<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetSelfRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.user.GetSelf');
    }
}
