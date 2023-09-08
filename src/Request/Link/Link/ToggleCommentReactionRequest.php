<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Link\Link;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ToggleCommentReactionRequest extends AbstractRequest
{
    public string $reaction;

    public bool $active;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $linkId,
        protected readonly int $commentId,
    ) {
        parent::__construct('link.link.ToggleCommentReaction');
    }
}
