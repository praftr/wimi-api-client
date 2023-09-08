<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Session;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LoadProjectsRequest extends AbstractRequest
{
    public ?bool $allAccountProjects = false;

    public ?bool $projectsAuth = true;

    public ?bool $projectsStats = true;

    public ?bool $projectsTasksStats = false;

    public ?bool $projectsUsers = false;

    public ?int $page = 1;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.session.LoadProjects');
    }
}
