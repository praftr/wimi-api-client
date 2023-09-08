<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Comment\Comment;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetUserCommentedItemsRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('comment.comment.GetUserCommentedItems');
    }
}
