<?php

namespace Praftr\WimiApiClient\Request;

interface RequestInterface
{
    public function getHeader(): array;

    public function getData(): array;
}
