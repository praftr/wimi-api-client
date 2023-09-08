<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateAvatarRequest extends AbstractRequest
{
    public ?string $name = "";

    public ?string $info = "";

    public int $size = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId = 0,
    ) {
        parent::__construct('social.community.UpdateAvatar');
    }
}
