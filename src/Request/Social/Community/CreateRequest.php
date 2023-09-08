<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Social\Community;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateRequest extends AbstractRequest
{
    public string $name;

    public ?string $description = "";

    public int $subscriptionType;

    public ?bool $allowUnsubscription = true;

    public ?bool $allowGuests = false;

    public int $postCreationAuth = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('social.community.Create');
    }
}
