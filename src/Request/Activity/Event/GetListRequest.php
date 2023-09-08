<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Activity\Event;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetListRequest extends AbstractRequest
{
    public ?\DateTimeImmutable $minDate = null;

    public ?\DateTimeImmutable $maxDate = null;

    public ?int $limit = 100;

    public int $offset = 0;

    public ?array $userIdList = [];

    public ?string $filter = "";

    public ?bool $withAccountEvent = false;

    public ?bool $withDeletedOrArchivedProjects = false;

    public ?array $typeList = [];

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly array $projectIdList,
    ) {
        parent::__construct('activity.event.GetList');
    }
}
