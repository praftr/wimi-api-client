<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetPostListRequest extends AbstractRequest
{
    public ?bool $withPolls = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly array $communityPostIdList,
    ) {
        parent::__construct('social.community.GetPostList');
    }
}
