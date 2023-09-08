<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BatchRemoveTagRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly array $targetUserIdList,
        protected readonly int $tagId,
    ) {
        parent::__construct('main.user.BatchRemoveTag');
    }
}
