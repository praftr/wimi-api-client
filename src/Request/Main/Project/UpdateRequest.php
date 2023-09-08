<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Project;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateRequest extends AbstractRequest
{
    public ?string $projectName = "";

    public int $categoryId = 0;

    public ?string $newCategoryName = "";

    public ?string $emailPrefix = "";

    public ?string $urlImage = "";

    public ?bool $refreshDefaultImage = false;

    public int $storageQuota = 0;

    public ?string $name = "";

    public ?string $info = "";

    public int $size = 0;

    public ?int $endDate = null;

    public ?int $startDate = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?string $apiKey = "",
    ) {
        parent::__construct('main.project.Update');
    }
}
