<?php

namespace OpenMarket\APIBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use OpenMarket\APIBundle\DependencyInjection\Compiler\ValidatorCompilerPass;
use OpenMarket\APIBundle\DependencyInjection\Compiler\NelmioJmsSerializerParserCompilerPass;

class OpenMarketAPIBundle extends Bundle
{
    public function build(ContainerBuilder $container){
        parent::build($container);
        $container->addCompilerPass(new ValidatorCompilerPass());
        $container->addCompilerPass(new NelmioJmsSerializerParserCompilerPass());
    }
}
