<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PromoteToProjectRequest extends AbstractRequest
{
    public int $categoryId;

    public ?string $newCategoryName = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId = null,
    ) {
        parent::__construct('document.directory.PromoteToProject');
    }
}
