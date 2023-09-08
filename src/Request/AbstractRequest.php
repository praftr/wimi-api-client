<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request;

use ReflectionClass;

abstract class AbstractRequest implements RequestInterface
{
    private readonly array $properties;

    public function __construct(
        private readonly string $target,
    ) {
        $reflect = new ReflectionClass($this);
        $this->properties = $reflect->getProperties();
    }

    public function getHeader(): array
    {
        $identification = [];

        foreach ($this->properties as $prop) {
            if ($prop->isProtected()) {
                $identification[self::camelToSnake($prop->getName())] = $this->{$prop->getName()};
            }
        }

        return [
            'target' => $this->target,
            'identification' => $identification,
        ];
    }

    public function getData(): array
    {
        $data = [];

        foreach ($this->properties as $prop) {
            if ($prop->isPublic()) {
                $data[self::camelToSnake($prop->getName())] = $this->{$prop->getName()};
            }
        }

        return $data;
    }

    private static function camelToSnake(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }
}
