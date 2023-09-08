<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Generator;

class Coder
{
    public static function code(ActionClass $actionClass): string
    {
        $code = "<?php\n\n";
        $code .= "declare(strict_types=1);\n\n";
        $code .= "namespace Praftr\WimiApiClient\Request\\{$actionClass->namespace};\n\n";
        $code .= "use Praftr\WimiApiClient\Request\AbstractRequest;\n\n";
        $code .= "class {$actionClass->name} extends AbstractRequest\n";
        $code .= "{\n";

        foreach ($actionClass->dataProperties as $property) {
            $code .= "\t{$property->getDefinition()};\n\n";
        }

        $code .= "\tpublic function __construct(\n";

        foreach ($actionClass->identificationProperties as $constructorArgument) {
            $code .= "\t\t{$constructorArgument->getDefinition()},\n";
        }

        $code .= "\t) {\n";
        $code .= "\t\tparent::__construct('{$actionClass->target}');\n";
        $code .= "\t}\n";
        $code .= "}\n";

        return $code;
    }
}
