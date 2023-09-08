<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditAvatarRequest extends AbstractRequest
{
    public ?string $name = "";

    public int $size = 0;

    public ?bool $removeAvatar = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $targetUserId,
    ) {
        parent::__construct('main.user.EditAvatar');
    }
}
