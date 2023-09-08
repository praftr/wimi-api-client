<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Search;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SearchProjectsRequest extends AbstractRequest
{
    public ?string $query = "";

    public ?bool $archived = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.search.SearchProjects');
    }
}
