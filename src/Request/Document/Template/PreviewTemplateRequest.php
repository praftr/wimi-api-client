<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Template;

use Praftr\WimiApiClient\Request\AbstractRequest;

class PreviewTemplateRequest extends AbstractRequest
{
    public ?string $previewType = "thumbnail_large";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $fileTemplateId,
    ) {
        parent::__construct('document.template.PreviewTemplate');
    }
}
