<?php

<<<<<<< HEAD:var/cache/dev/ContainerZAIPxnQ/getMaker_GeneratorService.php
namespace ContainerZAIPxnQ;
=======
namespace Container6zx9oCo;
>>>>>>> 920a3a4a2dbd864011feb9ea20ab5496d21e1558:var/cache/dev/Container6zx9oCo/getMaker_GeneratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'PhpCompatUtil.php';

        $a = ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService'));

        return $container->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator($a, 'App', new \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil($a));
    }
}