<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditMessageRequest extends AbstractRequest
{
    public string $message;

    public int $messageIndex = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $chatId,
        protected readonly int $messageId,
    ) {
        parent::__construct('chat.chat.EditMessage');
    }
}
