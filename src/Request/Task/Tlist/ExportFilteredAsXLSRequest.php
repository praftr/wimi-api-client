<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Task\Tlist;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ExportFilteredAsXLSRequest extends AbstractRequest
{
    public ?string $delimiter = ";";

    public ?string $title = "";

    public ?array $lists = [];

    public ?array $tags = [];

    public ?string $tagsLogic = "";

    public ?array $owners = [];

    public ?array $statuses = [];

    public ?bool $late = false;

    public ?bool $lastOccurrences = false;

    public ?bool $afterListEndDate = false;

    public ?string $dateOption = null;

    public ?int $datesDelay = null;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly ?int $targetProjectId = null,
    ) {
        parent::__construct('task.tlist.ExportFilteredAsXLS');
    }
}
