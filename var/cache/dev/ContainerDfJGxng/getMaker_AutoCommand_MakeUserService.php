<?php

namespace ContainerDfJGxng;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService'));

        $container->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($container->privates['maker.security_config_updater'] ?? ($container->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($container->privates['maker.entity_class_generator'] ?? $container->load('getMaker_EntityClassGeneratorService'))), $a, ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setDescription('Creates a new security user class');
        $instance->setName('make:user');

        return $instance;
    }
}
