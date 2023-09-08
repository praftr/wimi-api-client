<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Chat\Chat;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SearchRequest extends AbstractRequest
{
    public string $search;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $chatId,
    ) {
        parent::__construct('chat.chat.Search');
    }
}
