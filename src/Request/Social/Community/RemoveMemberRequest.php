<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RemoveMemberRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId,
        protected readonly int $member,
    ) {
        parent::__construct('social.community.RemoveMember');
    }
}
