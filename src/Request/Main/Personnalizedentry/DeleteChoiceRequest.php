<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Personnalizedentry;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DeleteChoiceRequest extends AbstractRequest
{
    public int $entryId;

    public int $choiceId;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.personnalizedentry.DeleteChoice');
    }
}
