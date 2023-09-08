<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditUserRequest extends AbstractRequest
{
    public ?array $phones = [];

    public ?string $firstName = "";

    public ?string $lastName = "";

    public ?string $login = null;

    public ?int $tags = null;

    public ?string $password = null;

    public ?string $oldPassword = "";

    public int $role = 0;

    public ?string $gender = "M.";

    public ?string $skype = "";

    public ?string $company = "";

    public ?string $department = null;

    public ?string $title = "";

    public ?string $samlId = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $targetUserId,
    ) {
        parent::__construct('main.account.EditUser');
    }
}
