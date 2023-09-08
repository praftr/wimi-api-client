<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetMemberListProjectsAuthRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $groupMemberList,
    ) {
        parent::__construct('main.account.GetMemberListProjectsAuth');
    }
}
