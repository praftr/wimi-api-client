<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Generator;

class ActionClass
{
    public function __construct(
        public readonly string $namespace,
        public readonly string $name,
        /** @var ActionProperty[] $identificationProperties */
        public readonly array $identificationProperties,
        /** @var ActionProperty[] $dataProperties */
        public readonly array $dataProperties,
        public readonly string $target,
    ) {
    }
}
