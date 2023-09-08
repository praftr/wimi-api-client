<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Post;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetCommentIntegrationAttachmentRequest extends AbstractRequest
{
    public ?int $integrationAttachment = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId,
        protected readonly int $communityPostId,
        protected readonly string $communityPostCommentId,
    ) {
        parent::__construct('social.post.SetCommentIntegrationAttachment');
    }
}
