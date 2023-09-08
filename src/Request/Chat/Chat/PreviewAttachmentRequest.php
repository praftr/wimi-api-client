<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PreviewAttachmentRequest extends AbstractRequest
{
    public ?string $previewType = "default";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?int $attachmentId,
        protected readonly int $chatId,
    ) {
        parent::__construct('chat.chat.PreviewAttachment');
    }
}
