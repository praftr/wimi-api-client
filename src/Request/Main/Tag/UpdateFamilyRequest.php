<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Tag;

use Praftr\WimiApiClient\Request\AbstractRequest;

class UpdateFamilyRequest extends AbstractRequest
{
    public string $label;

    public int $familyTag;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.tag.UpdateFamily');
    }
}
