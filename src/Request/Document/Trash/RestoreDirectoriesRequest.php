<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Trash;

use Praftr\WimiApiClient\Request\AbstractRequest;

class RestoreDirectoriesRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $dirIdList,
    ) {
        parent::__construct('document.trash.RestoreDirectories');
    }
}
