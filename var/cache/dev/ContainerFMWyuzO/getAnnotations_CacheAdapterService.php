<?php

<<<<<<< HEAD:var/cache/dev/ContainerXXQQ6If/getAnnotations_CacheAdapterService.php
namespace ContainerXXQQ6If;
=======
namespace ContainerFMWyuzO;
>>>>>>> f8ba43ef024d074c2dd82002bad2eb2fdb6017d9:var/cache/dev/ContainerFMWyuzO/getAnnotations_CacheAdapterService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_CacheAdapterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ProxyTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'PhpArrayAdapter.php';

        return \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($container->targetDir.''.'/annotations.php'), ($container->privates['cache.annotations'] ?? $container->getCache_AnnotationsService()));
    }
}
