<?php

namespace Container3X3A7gO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ProjectRepository' shared autowired service.
     *
     * @return \App\Repository\ProjectRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProjectRepository'] = new \App\Repository\ProjectRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}