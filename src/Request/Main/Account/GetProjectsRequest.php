<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetProjectsRequest extends AbstractRequest
{
    public ?bool $calcDocumentSize = false;

    public ?bool $withCategories = false;

    public ?bool $projectsAuth = true;

    public ?bool $projectsStats = false;

    public ?bool $projectsTasksStats = false;

    public ?bool $projectsUsers = false;

    public ?bool $allProjects = true;

    public ?bool $includeArchived = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.account.GetProjects');
    }
}
