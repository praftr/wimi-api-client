<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Communication\Air;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetPersistentRoomRequest extends AbstractRequest
{
    public int $roomId;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('communication.air.GetPersistentRoom');
    }
}
