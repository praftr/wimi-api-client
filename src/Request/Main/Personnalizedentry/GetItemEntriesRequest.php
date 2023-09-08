<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Personnalizedentry;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetItemEntriesRequest extends AbstractRequest
{
    public int $itemId;

    public int $itemTypeId;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.personnalizedentry.GetItemEntries');
    }
}
