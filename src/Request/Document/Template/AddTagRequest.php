<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Template;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddTagRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $fileTemplateId,
        protected readonly string $label,
    ) {
        parent::__construct('document.template.AddTag');
    }
}
