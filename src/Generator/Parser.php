<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Generator;

class Parser
{
    public static function parseAction(array $action): ActionClass
    {
        $namespace = self::parseActionNamespace($action['target']);
        $name = self::parseActionName($action['target']);

        $constructorArguments = [];
        foreach ($action['identification'] as $input) {
            $constructorArguments[] = self::parseProperty('protected readonly', $input);
        }

        $properties = [];
        foreach ($action['data'] as $input) {
            $properties[] = self::parseProperty('public', $input);
        }

        return new ActionClass($namespace, $name, $constructorArguments, $properties, $action['target']);
    }

    private static function parseActionNamespace(string $input): string
    {
        $targetParts = explode('.', $input);
        array_pop($targetParts);
        $targetParts = array_map('ucfirst', $targetParts);

        return implode('\\', $targetParts);
    }

    private static function parseActionName(string $input): string
    {
        $targetParts = explode('.', $input);

        return end($targetParts).'Request';
    }

    private static function parseProperty(string $visibility, string $input): ActionProperty
    {
        [$namePart, $typePart] = explode('- ', $input);

        $name = self::parsePropertyName($namePart);
        $default = self::parsePropertyDefaultValue($typePart);
        $type = ($default ? '?' : '').self::parsePropertyType($typePart);

        return new ActionProperty($visibility, $type, $name, $default);
    }

    private static function parsePropertyType(string $input): string
    {
        if (str_contains($input, 'list') || str_contains($input, '[]')) {
            return 'array';
        } elseif (str_contains($input, 'datetime')) {
            return '\DateTimeImmutable';
        } elseif (str_contains($input, 'string')) {
            return 'string';
        } elseif (str_contains($input, 'bool')) {
            return 'bool';
        } else {
            return 'int';
        }
    }

    private static function parsePropertyName(string $input): string
    {
        return self::snakeToCamel($input);
    }

    private static function parsePropertyDefaultValue(string $input): ?string
    {
        if (!str_contains($input, 'Optional: ')) {
            return null;
        }

        $defaultValue = explode('Optional: ', $input)[1];

        if ($defaultValue === '"""') {
            return '\'"\'';
        }

        if ($defaultValue === 'stdClass Object ( )') {
            return 'null';
        }

        if ($defaultValue === 'Array ( [0] => 1 )') {
            return '[]';
        }

        return $defaultValue;
    }

    private static function snakeToCamel(string $input = null): string
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $input))));
    }
}
