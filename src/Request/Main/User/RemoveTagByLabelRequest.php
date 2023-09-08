<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveTagByLabelRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $targetUserId,
        protected readonly string $label,
    ) {
        parent::__construct('main.user.RemoveTagByLabel');
    }
}
