<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Document\Validation;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateRequestRequest extends AbstractRequest
{
    public ?\DateTimeImmutable $expiryDate = null;

    public ?array $userIdList = [];

    public ?string $description = "";

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $projectId,
        protected readonly int $fileMasterId,
    ) {
        parent::__construct('document.validation.CreateRequest');
    }
}
