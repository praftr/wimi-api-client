<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateRequest extends AbstractRequest
{
    public ?array $users = [];

    public ?array $userGroups = [];

    public ?string $name = "";

    public ?bool $useExisting = true;

    public ?bool $forceCreation = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('chat.chat.Create');
    }
}
