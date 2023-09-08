<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetAccountExternalInfoRequest extends AbstractRequest
{
    public function __construct(
        protected readonly ?string $accountName = "",
    ) {
        parent::__construct('main.account.GetAccountExternalInfo');
    }
}
