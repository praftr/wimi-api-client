<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Praftr\WimiApiClient\Generator\ActionClass;
use Praftr\WimiApiClient\Generator\ActionProperty;
use Praftr\WimiApiClient\Generator\Coder;

class CoderTest extends TestCase
{
    public function testGenerateWithOneProperty(): void
    {
        $constructorArguments = [
            new ActionProperty('private readonly', 'int', 'accountId'),
        ];
        $properties = [
            new ActionProperty('public', '\\DateTimeImmutable', 'minDate'),
        ];
        $actionClass = new ActionClass(
            'SubSection\\Section',
            'Action',
            $constructorArguments,
            $properties,
            'subsection.section.action',
        );
        $expectedCode = <<<END
<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\SubSection\Section;

use Praftr\WimiApiClient\Request\AbstractRequest;

class Action extends AbstractRequest
{
    public \DateTimeImmutable \$minDate;

    public function __construct(
        private readonly int \$accountId,
    ) {
        parent::__construct('subsection.section.action');
    }
}

END;

        $actualCode = Coder::code($actionClass);
        $actualCode = str_replace("\t", '    ', $actualCode);

        $this->assertSame($expectedCode, $actualCode);
    }

    public function testGenerateWithSeveralProperties(): void
    {
        $constructorArguments = [
            new ActionProperty('private readonly', 'int', 'accountId'),
            new ActionProperty('private readonly', 'array', 'projectIdList'),
        ];
        $properties = [
            new ActionProperty('public', '\\DateTimeImmutable', 'minDate'),
            new ActionProperty('public', '?array', 'typeList', '[]'),
        ];
        $actionClass = new ActionClass(
            'SubSection\\Section',
            'Action',
            $constructorArguments,
            $properties,
            'subsection.section.action',
        );
        $expectedCode = <<<END
<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\SubSection\Section;

use Praftr\WimiApiClient\Request\AbstractRequest;

class Action extends AbstractRequest
{
    public \DateTimeImmutable \$minDate;

    public ?array \$typeList = [];

    public function __construct(
        private readonly int \$accountId,
        private readonly array \$projectIdList,
    ) {
        parent::__construct('subsection.section.action');
    }
}

END;

        $actualCode = Coder::code($actionClass);
        $actualCode = str_replace("\t", '    ', $actualCode);

        $this->assertSame($expectedCode, $actualCode);
    }

    public function testGenerateWithoutDataProperties(): void
    {
        $constructorArguments = [
            new ActionProperty('private readonly', 'int', 'accountId'),
            new ActionProperty('private readonly', 'array', 'projectIdList'),
        ];
        $properties = [];
        $actionClass = new ActionClass(
            'SubSection\\Section',
            'Action',
            $constructorArguments,
            $properties,
            'subsection.section.action',
        );
        $expectedCode = <<<END
<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Request\SubSection\Section;

use Praftr\WimiApiClient\Request\AbstractRequest;

class Action extends AbstractRequest
{
    public function __construct(
        private readonly int \$accountId,
        private readonly array \$projectIdList,
    ) {
        parent::__construct('subsection.section.action');
    }
}

END;

        $actualCode = Coder::code($actionClass);
        $actualCode = str_replace("\t", '    ', $actualCode);

        $this->assertSame($expectedCode, $actualCode);
    }
}
