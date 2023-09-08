<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetBillingInfoRequest extends AbstractRequest
{
    public ?string $billName = null;

    public ?string $owner = null;

    public ?string $email = null;

    public ?string $entityType = null;

    public ?string $tva = "";

    public ?int $address = null;

    public ?array $phone = [];

    public ?string $retailer = null;

    public int $paymentPeriodicity = 0;

    public ?bool $automaticRenewal = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.SetBillingInfo');
    }
}
