<?php

namespace ContainerScc58Ro;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validator\TestValidator' shared autowired service.
     *
     * @return \App\Validator\TestValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Validator/TestValidator.php';

        return $container->privates['App\\Validator\\TestValidator'] = new \App\Validator\TestValidator();
    }
}
