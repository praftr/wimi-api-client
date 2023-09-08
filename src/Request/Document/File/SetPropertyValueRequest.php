<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetPropertyValueRequest extends AbstractRequest
{
    public string $value;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileMasterId,
        protected readonly string $propertyLabel,
    ) {
        parent::__construct('document.file.SetPropertyValue');
    }
}
