<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetPinnedPostListRequest extends AbstractRequest
{
    public ?bool $withPolls = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId = 0,
    ) {
        parent::__construct('social.community.GetPinnedPostList');
    }
}