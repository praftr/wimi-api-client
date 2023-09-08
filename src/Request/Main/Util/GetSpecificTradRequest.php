<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Util;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetSpecificTradRequest extends AbstractRequest
{
    public string $lang;

    public string $tradKey;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.util.GetSpecificTrad');
    }
}
