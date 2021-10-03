<?php

declare(strict_types=1);

/*
 * This file is part of Contao Background Bundle.
 *
 * (c) Falk von Freigeist 2021
 * @license LGPL-3.0+
 * @link https://github.com/falkgeist/contao-background-bundle
 */

namespace Falkgeist\ContaoBackgroundBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContaoBackgroundExtension extends Extension
{
    public function load(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yml');
    }
}