<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Directory;

use Praftr\WimiApiClient\Request\AbstractRequest;

class SetPropertyValueRequest extends AbstractRequest
{
    public string $value;

    public ?bool $subdirs = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $dirId,
        protected readonly string $propertyLabel,
    ) {
        parent::__construct('document.directory.SetPropertyValue');
    }
}
