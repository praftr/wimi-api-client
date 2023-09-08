<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PublishPostRequest extends AbstractRequest
{
    public string $content;

    public ?int $integrationAttachment = null;

    public ?int $poll = null;

    public ?int $contentType = 1;

    public ?bool $allowComments = true;

    public ?bool $isPinned = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId = 0,
    ) {
        parent::__construct('social.community.PublishPost');
    }
}
