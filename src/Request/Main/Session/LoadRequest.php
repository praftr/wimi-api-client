<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Session;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LoadRequest extends AbstractRequest
{
    public ?bool $allAccountProjects = false;

    public ?bool $projectsAuth = true;

    public ?bool $projectsStats = true;

    public ?bool $projectsTasksStats = false;

    public ?bool $projectsUsers = false;

    public ?bool $usersTrashed = false;

    public ?bool $usersDeleted = false;

    public ?bool $tags = false;

    public ?bool $offer = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.session.Load');
    }
}
