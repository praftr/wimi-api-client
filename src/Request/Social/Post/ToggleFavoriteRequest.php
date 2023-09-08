<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Post;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ToggleFavoriteRequest extends AbstractRequest
{
    public bool $favorite;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId,
        protected readonly int $communityPostId,
    ) {
        parent::__construct('social.post.ToggleFavorite');
    }
}
