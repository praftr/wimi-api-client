<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateGroupChatProfilePictureRequest extends AbstractRequest
{
    public int $chatId;

    public ?string $name = "";

    public int $size = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('chat.chat.UpdateGroupChatProfilePicture');
    }
}
