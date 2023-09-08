<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Search;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SearchRequest extends AbstractRequest
{
    public ?string $query = "";

    public ?array $tagLabelList = [];

    public ?string $module = "";

    public int $amount = 0;

    public ?int $extraFilters = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('main.search.Search');
    }
}
