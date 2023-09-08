<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Personnalizedentry;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetEntryValueRequest extends AbstractRequest
{
    public int $entryId;

    public int $itemId;

    public int $itemTypeId;

    public ?string $rawValue = "";

    public ?int $choiceId = null;

    public ?bool $choiceStatus = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.personnalizedentry.SetEntryValue');
    }
}
