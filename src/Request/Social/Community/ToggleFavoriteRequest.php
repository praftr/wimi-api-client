<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ToggleFavoriteRequest extends AbstractRequest
{
    public bool $favorite;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId = 0,
    ) {
        parent::__construct('social.community.ToggleFavorite');
    }
}
