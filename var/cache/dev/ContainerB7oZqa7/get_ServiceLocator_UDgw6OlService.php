<?php

<<<<<<< HEAD:var/cache/dev/Container5wCsSfz/get_ServiceLocator_UDgw6OlService.php
namespace Container5wCsSfz;
=======
namespace ContainerB7oZqa7;
>>>>>>> 90b6194576a24a0391cc0af66edbdae8cc0d6d14:var/cache/dev/ContainerB7oZqa7/get_ServiceLocator_UDgw6OlService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UDgw6OlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UDgw6Ol' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UDgw6Ol'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'authenticationUtils' => '?',
        ]);
    }
}
