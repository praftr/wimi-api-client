<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateLimitedTokenRequest extends AbstractRequest
{
    public ?int $access = 0 ;

    public ?int $ttl = 300 ;

    public ?bool $robot = false ;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.user.CreateLimitedToken');
    }
}
