<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 20:40
 */

namespace Inwebo\Bundle\IpStackBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('parameters');

        $rootNode
            ->children()
                ->arrayNode('parameters')
                    ->isRequired()
                    ->children()
                        ->scalarNode('ipstack_api_key')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('ipstack_endpoint')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end() // twitter
            ->end()
        ;

        return $treeBuilder;
    }

}