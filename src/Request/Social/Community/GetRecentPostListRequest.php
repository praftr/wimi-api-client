<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetRecentPostListRequest extends AbstractRequest
{
    public ?bool $includePinned = false;

    public ?int $limit = 10;

    public ?array $excludedPostIdList = [];

    public ?bool $withPolls = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('social.community.GetRecentPostList');
    }
}
