<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateRequest extends AbstractRequest
{
    public ?string $name = null;

    public ?string $description = "";

    public int $subscriptionType = 0;

    public ?bool $allowUnsubscription = true;

    public ?bool $allowGuests = false;

    public int $postCreationAuth = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $communityId = 0,
    ) {
        parent::__construct('social.community.Update');
    }
}
