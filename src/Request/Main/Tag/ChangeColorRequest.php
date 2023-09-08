<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Tag;

use Praftr\WimiApiClient\Request\AbstractRequest;

class ChangeColorRequest extends AbstractRequest
{
    public int $color;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
        protected readonly int $tagId,
    ) {
        parent::__construct('main.tag.ChangeColor');
    }
}
