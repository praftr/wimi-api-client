<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateRequest extends AbstractRequest
{
    public ?array $phones = [];

    public ?string $firstName = "";

    public ?string $lastName = "";

    public ?string $login = null;

    public ?string $password = null;

    public ?string $oldPassword = "";

    public ?string $gender = "M.";

    public ?string $skype = "";

    public ?string $company = "";

    public ?string $department = null;

    public ?string $title = "";

    public ?string $samlId = "";

    public int $tokenTtlMins = 0;

    public ?string $tankerSecret = "";

    public ?string $customImageUrl = "";

    public ?string $timezone = "";

    public ?string $dateFormatFamily = "";

    public ?bool $securityAutologin = false;

    public ?bool $doubleAuth = false;

    public ?string $name = "";

    public int $size = 0;

    public ?bool $removeAvatar = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.user.Update');
    }
}
