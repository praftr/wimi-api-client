<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Post;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ToggleReactionRequest extends AbstractRequest
{
    public string $reaction;

    public bool $active;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId,
        protected readonly int $communityPostId,
    ) {
        parent::__construct('social.post.ToggleReaction');
    }
}
