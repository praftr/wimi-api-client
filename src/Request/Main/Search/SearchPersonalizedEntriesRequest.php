<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Search;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SearchPersonalizedEntriesRequest extends AbstractRequest
{
    public ?array $filters = [];

    public ?string $filterLogic = "OR";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.search.SearchPersonalizedEntries');
    }
}
