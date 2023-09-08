<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddAttachmentRequest extends AbstractRequest
{
    public ?string $attachmentTitle = "";

    public ?string $attachmentDescription = "";

    public string $name;

    public int $size;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $chatId,
    ) {
        parent::__construct('chat.chat.AddAttachment');
    }
}
