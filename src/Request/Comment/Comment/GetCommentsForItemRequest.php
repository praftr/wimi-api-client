<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Comment\Comment;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetCommentsForItemRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $itemId,
        protected readonly int $itemTypeId,
    ) {
        parent::__construct('comment.comment.GetCommentsForItem');
    }
}
