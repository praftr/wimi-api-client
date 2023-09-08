<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Praftr\WimiApiClient\Generator\Coder;
use Praftr\WimiApiClient\Generator\Parser;
use Praftr\WimiApiClient\Generator\Scraper;

$actions = Scraper::scrap(new GuzzleHttp\Client());

foreach ($actions as $action) {
    $actionClass = Parser::parseAction($action);
    $code = Coder::code($actionClass);

    $directory = __DIR__.'/../src/Request/'.str_replace('\\', '/', $actionClass->namespace);
    $filePath = $directory.'/'.$actionClass->name.'.php';

    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }

    file_put_contents($filePath, $code);
}
