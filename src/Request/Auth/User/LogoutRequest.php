<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Auth\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LogoutRequest extends AbstractRequest
{
    public ?bool $keepSelf = false;

    public ?bool $killAll = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('auth.user.Logout');
    }
}
