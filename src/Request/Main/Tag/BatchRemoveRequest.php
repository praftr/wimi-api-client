<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Tag;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BatchRemoveRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly array $tagIdList,
    ) {
        parent::__construct('main.tag.BatchRemove');
    }
}
