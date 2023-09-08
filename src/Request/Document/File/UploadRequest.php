<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\File;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UploadRequest extends AbstractRequest
{
    public ?bool $notify = false;

    public ?string $timestamp = "";

    public ?bool $replaceMaster = false;

    public ?bool $conflictRename = false;

    public ?string $md5 = "";

    public string $name;

    public ?string $info = "";

    public int $size;

    public ?bool $processThumbnail = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId = null,
        protected readonly ?int $fileId = null,
    ) {
        parent::__construct('document.file.Upload');
    }
}
