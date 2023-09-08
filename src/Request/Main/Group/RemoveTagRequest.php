<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Group;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveTagRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $userGroupId,
        protected readonly int $tagId,
    ) {
        parent::__construct('main.group.RemoveTag');
    }
}
