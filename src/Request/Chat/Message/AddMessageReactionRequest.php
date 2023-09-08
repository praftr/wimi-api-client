<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Message;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddMessageReactionRequest extends AbstractRequest
{
    public int $reaction;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?string $apiKey,
        protected readonly int $chatId,
        protected readonly int $messageId,
    ) {
        parent::__construct('chat.message.AddMessageReaction');
    }
}
