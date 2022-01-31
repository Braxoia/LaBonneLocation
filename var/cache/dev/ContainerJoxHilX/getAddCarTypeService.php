<?php

namespace ContainerJoxHilX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddCarTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AddCarType' shared autowired service.
     *
     * @return \App\Form\AddCarType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AddCarType.php';

        return $container->privates['App\\Form\\AddCarType'] = new \App\Form\AddCarType();
    }
}
