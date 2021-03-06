<?php

namespace OpenMarket\APIBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use OpenMarket\APIBundle\DependencyInjection\Compiler\ValidatorCompilerPass;


class OpenMarketAPIBundle extends Bundle
{
    public function build(ContainerBuilder $container){
        parent::build($container);
        $container->addCompilerPass(new ValidatorCompilerPass());
    }
}
