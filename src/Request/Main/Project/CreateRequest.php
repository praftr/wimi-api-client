<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Project;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateRequest extends AbstractRequest
{
    public string $projectName;

    public ?int $categoryId = 0 ;

    public ?string $newCategoryName = "" ;

    public ?bool $noEmail = false;

    public ?string $emailPrefix = "";

    public ?string $info = "" ;

    public ?string $urlImage = "" ;

    public ?bool $cloneDirectories = true ;

    public ?bool $cloneFiles = true ;

    public ?bool $cloneTasks = true ;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?string $apiKey = "",
        protected readonly ?int $cloneProjectId = null,
    ) {
        parent::__construct('main.project.Create');
    }
}
