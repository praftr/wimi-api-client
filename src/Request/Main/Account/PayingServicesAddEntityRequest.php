<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PayingServicesAddEntityRequest extends AbstractRequest
{
    public array $selectedWorkspaceList;

    public array $unselectedWorkspaceList;

    public int $payingServiceId;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.PayingServicesAddEntity');
    }
}
