<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetBillingInfoRequest extends AbstractRequest
{
    public ?bool $offers = false;

    public ?bool $usersStats = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.GetBillingInfo');
    }
}
