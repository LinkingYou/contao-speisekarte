<?php

namespace LinkingYou\ContaoSpeisekarte\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('LinkingYou\ContaoSpeisekarte\ContaoSpeisekarteBundle')
            ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}