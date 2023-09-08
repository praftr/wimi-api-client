<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Group;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddTagRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $userGroupId,
        protected readonly string $label,
    ) {
        parent::__construct('main.group.AddTag');
    }
}
