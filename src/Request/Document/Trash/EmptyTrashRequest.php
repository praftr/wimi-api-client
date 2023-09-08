<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Trash;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EmptyTrashRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('document.trash.EmptyTrash');
    }
}
