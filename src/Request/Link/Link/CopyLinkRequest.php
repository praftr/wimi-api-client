<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Link\Link;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CopyLinkRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId,
        protected readonly array $linkIdList,
        protected readonly ?int $targetProjectId = null,
        protected readonly ?bool $copyMeta = false,
    ) {
        parent::__construct('link.link.CopyLink');
    }
}
