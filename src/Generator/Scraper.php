<?php

declare(strict_types=1);

namespace Praftr\WimiApiClient\Generator;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Scraper
{
    public static function scrap(ClientInterface $httpClient): array
    {
        $response = $httpClient->request('GET', 'https://pegasus.wimi.pro/wapi-doc-api');
        $html = $response->getBody()->getContents();

        $modules = self::scrapModulesName($html);

        $actions = [];
        foreach ($modules as $module) {
            $actions = array_merge($actions, self::scrapModule($html, $module));
        }

        return $actions;
    }

    private static function scrapModulesName(string $html): array
    {
        $crawler = new Crawler($html);

        return $crawler->filter('[id^=wapi-module-]')->extract(['id']);
    }

    private static function scrapModule(string $html, string $moduleTitle): array
    {
        $crawler = new Crawler($html);

        $html = $crawler->filter('#'.$moduleTitle)->html();
        $sections = self::splitSections($html);

        $actions = [];
        foreach ($sections as $section) {
            $actions[] = self::scrapAction($section);
        }

        return $actions;
    }

    private static function splitSections(string $html): array
    {
        $sections = [];
        $crawler = new Crawler($html);

        $crawler
            ->filter('h2')
            ->each(function (Crawler $node) use (&$sections) {
                $currentSection = $node->html();
                $siblingNode = $node->nextAll()->first();
                while ($siblingNode->count() && $siblingNode->nodeName() !== 'h2') {
                    $currentSection .= $siblingNode->outerHtml();
                    $siblingNode = $siblingNode->nextAll()->first();
                }

                $sections[] = $currentSection;
            })
        ;

        return $sections;
    }

    private static function scrapAction(string $section): array
    {
        $sectionCrawler = new Crawler($section);

        $action = [
            'target' => $sectionCrawler->filter('a')->text(),
            'identification' => [],
            'data' => [],
            'output' => [],
        ];

        $sectionCrawler
            ->filter('h4:contains("Header Identification:") + ul > li')
            ->each(function (Crawler $li) use (&$action) {
                $action['identification'][] = $li->text();
            })
        ;

        $sectionCrawler
            ->filter('h4:contains("Output:") + ul > li')
            ->each(function (Crawler $li) use (&$action) {
                $action['output'][] = $li->text();
            })
        ;

        $data = $sectionCrawler->filter('h4:contains("Body Data:") + ul');
        if ($data->count()) {
            $data
                ->filterXPath('//li[not(starts-with(normalize-space(), "-"))]')
                ->each(function (Crawler $li) use (&$action) {
                    $action['data'][] = $li->innerText();
                })
            ;
        }

        return $action;
    }
}
