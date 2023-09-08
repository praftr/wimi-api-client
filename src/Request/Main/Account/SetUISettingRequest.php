<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetUISettingRequest extends AbstractRequest
{
    public string $settingKey;

    public ?string $settingValue = "";

    public ?string $name = "";

    public int $size = 0;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.SetUISetting');
    }
}
