<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\Main\Saml;

use Praftr\WimiApiClient\Request\AbstractRequest;

class GetAccountListRequest extends AbstractRequest
{
    public function __construct(
        protected readonly string $accessToken,
    ) {
        parent::__construct('main.saml.GetAccountList');
    }
}
