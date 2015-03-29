<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 24/03/2015
 * Time: 13:07
 */

namespace OpenMarket\APIBundle\DependencyInjection\Compiler;

use Symfony\Component\Finder\Finder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\Config\Resource\DirectoryResource;

class ValidatorCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $validatorBuilder = $container->getDefinition('validator.builder');
        $validatorFiles = array();
        $finder = new Finder();

        foreach ($finder->files()->in(__DIR__ . '/../../Resources/config/validator') as $file) {
            $validatorFiles[] = $file->getRealPath();
        }

        $validatorBuilder->addMethodCall('addYamlMappings', array($validatorFiles));

        // add resources to the container to refresh cache after updating a file
        $container->addResource(new DirectoryResource(__DIR__ . '/../../Resources/config/validator'));
    }
}