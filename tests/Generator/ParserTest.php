<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Praftr\WimiApiClient\Generator\ActionClass;
use Praftr\WimiApiClient\Generator\ActionProperty;
use Praftr\WimiApiClient\Generator\Parser;

class ParserTest extends TestCase
{
    public function testParseAction(): void
    {
        $expectedActionConstructorArguments = [
            new ActionProperty('protected readonly', 'int', 'accountId'),
            new ActionProperty('protected readonly', '?array', 'userIdList', '[]'),
        ];
        $expectedActionProperties = [
            new ActionProperty('public', '?int', 'limit', '100'),
            new ActionProperty('public', '?string', 'csvDelimiter', '";"'),
            new ActionProperty('public', '?bool', 'withAccountEvent', 'false'),
            new ActionProperty('public', '?\DateTimeImmutable', 'minDate', 'null'),
            new ActionProperty('public', '?string', 'enclosure', '\'"\''),
            new ActionProperty('public', '?int', 'recurrenceIdList', 'null'),
            new ActionProperty('public', '?string', 'charset', '"UTF-8"'),
            new ActionProperty('public', '?array', 'filters', '[]'),
        ];
        $expectedClass = new ActionClass(
            'Section\SubSection',
            'ActionRequest',
            $expectedActionConstructorArguments,
            $expectedActionProperties,
            'section.subSection.Action',
        );

        $action = [
            'target' => 'section.subSection.Action',
            'identification' => [
                'account_id - int',
                'user_id_list - int list Optional: []',
            ],
            'data' => [
                'limit - int Optional: 100',
                'csv_delimiter - string Optional: ";"',
                'with_account_event - bool Optional: false',
                'min_date - datetime Optional: null',
                'enclosure - string Optional: """',
                'recurrence_id_list - Array Optional: stdClass Object ( )',
                'charset - string Optional: "UTF-8"',
                'filters - int list Optional: Array ( [0] => 1 )',
            ],
        ];

        $this->assertEquals($expectedClass, Parser::parseAction($action));
    }
}
