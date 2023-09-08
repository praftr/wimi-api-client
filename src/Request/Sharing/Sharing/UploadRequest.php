<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Sharing\Sharing;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UploadRequest extends AbstractRequest
{
    public ?string $sharingPwd = "";

    public ?bool $notify = false;

    public ?string $timestamp = "";

    public ?bool $replaceMaster = false;

    public string $name;

    public int $size;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly ?int $dirId,
        protected readonly string $sharingCode,
    ) {
        parent::__construct('sharing.sharing.Upload');
    }
}
