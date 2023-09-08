<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Tlist;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ExportAsCSVRequest extends AbstractRequest
{
    public ?bool $docs = false;

    public ?string $delimiter = ";";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly array $taskListIdList,
    ) {
        parent::__construct('task.tlist.ExportAsCSV');
    }
}
