<?php

namespace LaxCorp\CrmClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @inheritdoc
 */
class Configuration implements ConfigurationInterface
{

    const ROOT = 'crm_client';

    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder($this::ROOT);
        $rootNode    = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->scalarNode('enabled')->cannotBeEmpty()->end()
            ->scalarNode('api_url')->cannotBeEmpty()->end()
            ->scalarNode('site_url')->cannotBeEmpty()->end()
            ->scalarNode('source_name')->cannotBeEmpty()->end()
            ->scalarNode('username')->cannotBeEmpty()->end()
            ->scalarNode('access_key')->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}