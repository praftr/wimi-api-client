<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemovePropertyRequest extends AbstractRequest
{
    public int $propertyTypeId;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('main.user.RemoveProperty');
    }
}
