<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetChatRequest extends AbstractRequest
{
    public ?bool $withMessages = true;

    public ?int $limit = 30;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $chatId,
    ) {
        parent::__construct('chat.chat.GetChat');
    }
}
