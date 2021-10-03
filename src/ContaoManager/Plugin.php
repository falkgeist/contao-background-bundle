<?php

namespace Falkgeist\ContaoBackgroundBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Falkgeist\ContaoBackgroundBundle\ContaoBackgroundBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoBackgroundBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}