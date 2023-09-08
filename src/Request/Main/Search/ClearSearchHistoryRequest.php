<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Search;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ClearSearchHistoryRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.search.ClearSearchHistory');
    }
}
