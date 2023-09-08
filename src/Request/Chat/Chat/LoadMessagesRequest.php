<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LoadMessagesRequest extends AbstractRequest
{
    public int $offset = 0;

    public ?int $limit = 30;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $chatId,
        protected readonly ?int $messageId = null,
    ) {
        parent::__construct('chat.chat.LoadMessages');
    }
}
