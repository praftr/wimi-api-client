<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetArmouredDeviceListRequest extends AbstractRequest
{
    public int $deviceStatus = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.user.GetArmouredDeviceList');
    }
}
