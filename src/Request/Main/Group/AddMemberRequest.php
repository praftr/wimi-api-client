<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Group;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddMemberRequest extends AbstractRequest
{
    public array $groupMember = [];

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $userGroupId,
    ) {
        parent::__construct('main.group.AddMember');
    }
}
