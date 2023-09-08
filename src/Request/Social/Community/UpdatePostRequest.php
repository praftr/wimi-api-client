<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdatePostRequest extends AbstractRequest
{
    public string $content;

    public ?int $integrationAttachment = null;

    public ?int $contentType = 1;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId,
        protected readonly int $communityPostId,
    ) {
        parent::__construct('social.community.UpdatePost');
    }
}
