<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Trash;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ListRequest extends AbstractRequest
{
    public ?string $query = "";

    public ?\DateTimeImmutable $beforeDate = null;

    public ?\DateTimeImmutable $afterDate = null;

    public int $deletedBy = 0;

    public ?string $orderBy = "";

    public ?string $orderByType = "";

    public ?string $folderName = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
    ) {
        parent::__construct('document.trash.List');
    }
}
