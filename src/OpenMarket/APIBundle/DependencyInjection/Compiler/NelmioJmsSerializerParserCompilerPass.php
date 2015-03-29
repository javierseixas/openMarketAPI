<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 25/03/2015
 * Time: 13:19
 */

namespace OpenMarket\APIBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class NelmioJmsSerializerParserCompilerPass implements CompilerPassInterface{

    /**
     * Modified the nelmio jms metadata parser to use mine.
     *
     * @param ContainerBuilder $container
     *
     * @api
     */
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('nelmio_api_doc.parser.jms_metadata_parser');
        $definition->setClass('OpenMarket\APIBundle\Service\JmsMetadataParser');
    }
}
