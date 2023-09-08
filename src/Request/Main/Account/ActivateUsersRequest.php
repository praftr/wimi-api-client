<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ActivateUsersRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly array $userIdList,
    ) {
        parent::__construct('main.account.ActivateUsers');
    }
}
