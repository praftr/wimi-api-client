<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Session;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LoadUsersRequest extends AbstractRequest
{
    public ?bool $usersTrashed = false;

    public ?bool $usersDeleted = false;

    public ?int $page = 1;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.session.LoadUsers');
    }
}
