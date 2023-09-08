<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Project;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateFromTemplateRequest extends AbstractRequest
{
    public ?string $projectName = "";

    public int $categoryId = 0;

    public ?string $newCategoryName = "";

    public ?string $info = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $targetProjectId,
    ) {
        parent::__construct('main.project.CreateFromTemplate');
    }
}
