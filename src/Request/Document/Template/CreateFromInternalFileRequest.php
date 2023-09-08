<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Template;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateFromInternalFileRequest extends AbstractRequest
{
    public string $templateName;

    public ?string $description = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileId,
    ) {
        parent::__construct('document.template.CreateFromInternalFile');
    }
}
