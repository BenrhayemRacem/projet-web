<?php

namespace ContainerDfJGxng;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'D:\\projetnewnewnew/translations', 'D:\\projetnewnewnew/templates', [0 => 'D:\\projetnewnewnew\\vendor\\symfony\\validator/Resources/translations', 1 => 'D:\\projetnewnewnew\\vendor\\symfony\\form/Resources/translations', 2 => 'D:\\projetnewnewnew\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'D:\\projetnewnewnew\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'D:\\projetnewnewnew\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'D:\\projetnewnewnew\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 3 => 'D:\\projetnewnewnew\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php', 4 => 'D:\\projetnewnewnew\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 5 => 'D:\\projetnewnewnew\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 6 => 'D:\\projetnewnewnew\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php', 7 => 'D:\\projetnewnewnew\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 8 => 'D:\\projetnewnewnew\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 9 => 'D:\\projetnewnewnew\\vendor\\symfony\\validator\\ValidatorBuilder.php', 10 => 'D:\\projetnewnewnew\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 11 => 'D:\\projetnewnewnew\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php', 12 => 'D:\\projetnewnewnew\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 13 => 'D:\\projetnewnewnew\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 14 => 'D:\\projetnewnewnew\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php']);

        $instance->setName('debug:translation');

        return $instance;
    }
}