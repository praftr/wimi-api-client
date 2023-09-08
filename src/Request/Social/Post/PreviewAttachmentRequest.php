<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Post;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PreviewAttachmentRequest extends AbstractRequest
{
    public ?string $previewType = "default";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId,
        protected readonly int $communityPostId,
        protected readonly int $attachmentId,
    ) {
        parent::__construct('social.post.PreviewAttachment');
    }
}
