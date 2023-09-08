<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddUserRequest extends AbstractRequest
{
    public string $firstName;

    public string $lastName;

    public string $login;

    public ?int $tags = null;

    public ?int $level = 1;

    public int $role = 0;

    public ?string $language = "en";

    public ?string $password = null;

    public ?string $gender = "M.";

    public ?bool $notifUser = true;

    public ?string $message = "";

    public ?string $samlId = "";

    public ?string $company = "";

    public ?string $department = "";

    public ?string $title = "";

    public ?string $customImageUrl = "";

    public ?array $personalizedEntries = [];

    public ?array $phones = [];

    public ?int $notifyDocumentsInterval = 5;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?string $apiKey = "",
        protected readonly ?int $cloneUserId = null,
        protected readonly ?array $userGroupIdList = [],
    ) {
        parent::__construct('main.account.AddUser');
    }
}
