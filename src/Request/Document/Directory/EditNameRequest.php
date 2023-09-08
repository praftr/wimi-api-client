<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditNameRequest extends AbstractRequest
{
    public string $name;

    public ?bool $conflictRename = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $dirId,
    ) {
        parent::__construct('document.directory.EditName');
    }
}
