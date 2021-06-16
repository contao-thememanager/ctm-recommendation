<?php

declare(strict_types=1);

/*
 * This file is part of Contao ThemeManager Recommendation.
 *
 * (c) https://www.oveleon.de/
 */

namespace ContaoThemeManager\Recommendation\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoThemeManager\Recommendation\ContaoThemeManagerRecommendation;
use ContaoThemeManager\Core\ContaoThemeManagerCore;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoThemeManagerRecommendation::class)
                ->setLoadAfter([ContaoCoreBundle::class, ContaoThemeManagerCore::class])
                ->setReplace(['ctm-recommendation']),
        ];
    }
}
