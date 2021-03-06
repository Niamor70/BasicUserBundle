<?php

namespace CodeColliders\BasicUserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('basic_user');

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('user_class')->defaultNull()->cannotBeEmpty()->end()
            ->scalarNode('redirect_route')->defaultValue("code_colliders_basic_user_login")->end()
            ->arrayNode('branding')
            ->addDefaultsIfNotSet()
            ->children()
            ->scalarNode('logo_url')->defaultNull()->end()
            ->scalarNode('background_url')->defaultNull()->end()
            ->scalarNode('form_title')->defaultValue('Log in')->end()
            ->scalarNode('catchphrase')->defaultNull()->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
