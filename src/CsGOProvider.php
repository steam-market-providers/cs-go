<?php

declare(strict_types=1);

namespace SteamMarketProviders\CsGO;

use SteamMarketProviders\Enums\SteamApp;
use SteamMarketProviders\Enums\SteamLanguage;
use SteamMarketProviders\ParserManager\Builder\ParseRulesBuilder;
use SteamMarketProviders\ParserManager\Builder\SearchUrlBuilder;
use SteamMarketProviders\ParserManager\Contract\UrlBuilderInterface;
use SteamMarketProviders\ParserManager\Parser\Provider\AbstractProvider;

class CsGOProvider extends AbstractProvider
{
    protected function createUrl(int $page): UrlBuilderInterface
    {
        return (new SearchUrlBuilder())
            ->setAppId(SteamApp::CSGO)
            ->setPage($page)
            ->setLanguage(SteamLanguage::Russian);
    }

    protected function createParseRules(): ParseRulesBuilder
    {
        return (new ParseRulesBuilder())
            ->wrapper('wrapper1', '.div', function(ParseRulesBuilder $builder) {
                $builder->item('image', '.sdas')
                    ->wrapper('wrapper2', '.lox', function(ParseRulesBuilder $builder) {
                        $builder->item('image2', '.sdas');
                    });
            });
    }
}
