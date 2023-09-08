<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Link\Link;

use Praftr\WimiApiClient\Request\AbstractRequest;

class EditRequest extends AbstractRequest
{
    public ?string $url = null;

    public ?string $title = null;

    public ?string $description = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $linkId,
    ) {
        parent::__construct('link.link.Edit');
    }
}
