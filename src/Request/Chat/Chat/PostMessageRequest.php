<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PostMessageRequest extends AbstractRequest
{
    public string $message;

    public ?int $integrationAttachment = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?string $apiKey,
        protected readonly int $chatId,
    ) {
        parent::__construct('chat.chat.PostMessage');
    }
}
