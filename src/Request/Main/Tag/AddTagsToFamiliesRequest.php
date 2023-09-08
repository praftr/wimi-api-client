<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Tag;

use Praftr\WimiApiClient\Request\AbstractRequest;

class AddTagsToFamiliesRequest extends AbstractRequest
{
    public array $tags;

    public array $familyTags;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.tag.AddTagsToFamilies');
    }
}
