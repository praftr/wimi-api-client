<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateAuthListRequest extends AbstractRequest
{
    public int $auth;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId,
        protected readonly int $memberList,
    ) {
        parent::__construct('social.community.UpdateAuthList');
    }
}
