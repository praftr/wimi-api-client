<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Account;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetProjectRequest extends AbstractRequest
{
    public ?bool $projectAuth = true;

    public ?bool $projectStats = false;

    public ?bool $projectUsers = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('main.account.GetProject');
    }
}
