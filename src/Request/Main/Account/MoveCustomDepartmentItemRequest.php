<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class MoveCustomDepartmentItemRequest extends AbstractRequest
{
    public int $position;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly string $label,
    ) {
        parent::__construct('main.account.MoveCustomDepartmentItem');
    }
}
