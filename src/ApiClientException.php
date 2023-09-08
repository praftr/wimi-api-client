<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient;

class ApiClientException extends \Exception
{
    public function __construct(string $message, string $target)
    {
        parent::__construct(sprintf('%s: "%s"', $message, $target));
    }
}
