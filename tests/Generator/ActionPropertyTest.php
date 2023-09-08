<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Praftr\WimiApiClient\Generator\ActionProperty;

class ActionPropertyTest extends TestCase
{
    public function testToStringNoDefaultValue(): void
    {
        $property = new ActionProperty('private', 'int', 'count');

        $this->assertSame('private int $count', $property->getDefinition());
    }

    public function testToStringWithIntDefaultValue(): void
    {
        $property = new ActionProperty('private', 'int', 'count', '0');

        $this->assertSame('private int $count = 0', $property->getDefinition());
    }

    public function testToStringWithEmptyStringDefaultValue(): void
    {
        $property = new ActionProperty('private', 'int', 'count', '""');

        $this->assertSame('private int $count = ""', $property->getDefinition());
    }

    public function testGetUsage(): void
    {
        $property = new ActionProperty('private readonly', '?int', 'userId', '100');

        $this->assertSame('$this->userId', $property->getUsage());
    }
}
