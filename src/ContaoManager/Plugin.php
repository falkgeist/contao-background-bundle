<?php

declare(strict_types=1);

/*
 * This file is part of Contao Background Bundle.
 *
 * (c) Falk von Freigeist 2021
 * @license LGPL-3.0+
 * @link https://github.com/falkgeist/contao-background-bundle
 */

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