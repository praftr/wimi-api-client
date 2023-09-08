<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Generator;

class ActionProperty
{
    public function __construct(
        private readonly string $visibility,
        private readonly string $type,
        private readonly string $name,
        private readonly ?string $default = null,
    ) {
    }

    public function getDefinition(): string
    {
        if ($this->default === null) {
            return $this->visibility.' '.$this->type.' $'.$this->name;
        }

        return $this->visibility.' '.$this->type.' $'.$this->name.' = '.$this->default;
    }

    public function getUsage(): string
    {
        return '$this->'.$this->name;
    }
}
