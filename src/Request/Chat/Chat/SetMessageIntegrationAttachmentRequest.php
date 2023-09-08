<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetMessageIntegrationAttachmentRequest extends AbstractRequest
{
    public ?int $integrationAttachment = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?string $apiKey,
        protected readonly int $chatId,
        protected readonly int $messageId,
    ) {
        parent::__construct('chat.chat.SetMessageIntegrationAttachment');
    }
}
