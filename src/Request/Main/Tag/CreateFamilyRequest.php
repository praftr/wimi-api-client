<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Tag;

use Praftr\WimiApiClient\Request\AbstractRequest;

class CreateFamilyRequest extends AbstractRequest
{
    public string $familyTag;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.tag.CreateFamily');
    }
}
