<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Auth\User;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LoginRequest extends AbstractRequest
{
    public ?bool $listProjects = false;

    public ?bool $projectsAuth = true;

    public ?bool $projectsStats = false;

    public ?bool $projectsTasksStats = false;

    public ?bool $projectsUsers = false;

    public ?bool $manual = false;

    public ?string $token = "";

    public ?bool $fetchPwdSha = false;

    public function __construct(
        protected readonly ?string $accountName = "",
    ) {
        parent::__construct('auth.user.Login');
    }
}
