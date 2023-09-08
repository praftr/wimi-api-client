<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Project;

use Praftr\WimiApiClient\Request\AbstractRequest;

class BatchSetUsersAuthRequest extends AbstractRequest
{
    public ?int $level = -1 ;

    public ?int $documents = -1 ;

    public ?int $tasks = -1 ;

    public ?int $calendar = -1 ;

    public ?int $meetings = -1 ;

    public ?int $reporting = -1 ;

    public ?int $channel = -1 ;

    public ?bool $notifUser = true;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $targetUserIdList,
    ) {
        parent::__construct('main.project.BatchSetUsersAuth');
    }
}
