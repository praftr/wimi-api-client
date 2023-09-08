<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class DeleteCommentRequest extends AbstractRequest
{
    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $fileId,
        protected readonly ?int $fileMasterId,
        protected readonly int $commentId,
    ) {
        parent::__construct('document.file.DeleteComment');
    }
}