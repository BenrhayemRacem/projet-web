<?php

<<<<<<< HEAD:var/cache/dev/ContainerZAIPxnQ/getDebug_Security_Voter_VoteListenerService.php
namespace ContainerZAIPxnQ;
=======
namespace Container6zx9oCo;
>>>>>>> 920a3a4a2dbd864011feb9ea20ab5496d21e1558:var/cache/dev/Container6zx9oCo/getDebug_Security_Voter_VoteListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Voter_VoteListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'VoteListener.php';

        return $container->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($container->privates['debug.security.access.decision_manager'] ?? $container->getDebug_Security_Access_DecisionManagerService()));
    }
}