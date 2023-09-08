<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditArmouredDeviceRequest extends AbstractRequest
{
    public ?string $deviceName = "";

    public int $status = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly string $browserId,
        protected readonly ?string $deviceId = "",
    ) {
        parent::__construct('main.user.EditArmouredDevice');
    }
}
