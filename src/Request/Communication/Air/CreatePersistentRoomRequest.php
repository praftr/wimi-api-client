<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Communication\Air;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreatePersistentRoomRequest extends AbstractRequest
{
    public string $name;

    public int $image;

    public ?int $scope = 1;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('communication.air.CreatePersistentRoom');
    }
}
