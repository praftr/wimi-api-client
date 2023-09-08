<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Session;

use Praftr\WimiApiClient\Request\AbstractRequest;

class LoadExtraRequest extends AbstractRequest
{
    public ?bool $tags = false;

    public ?bool $offer = false;

    public function __construct(
        protected readonly int $accountId,
        protected readonly int $userId,
    ) {
        parent::__construct('main.session.LoadExtra');
    }
}
