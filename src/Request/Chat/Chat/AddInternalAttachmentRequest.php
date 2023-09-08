<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddInternalAttachmentRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $chatId,
        protected readonly int $fileId,
    ) {
        parent::__construct('chat.chat.AddInternalAttachment');
    }
}
