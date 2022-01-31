<?php

namespace ContainerAuBIRI1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hgc_O0_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Hgc.O0.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hgc.O0.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'car' => ['privates', '.errored..service_locator.Hgc.O0..App\\Entity\\Car', NULL, 'Cannot autowire service ".service_locator.Hgc.O0.": it references class "App\\Entity\\Car" but no such service exists.'],
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'car' => 'App\\Entity\\Car',
            'carRepository' => 'App\\Repository\\CarRepository',
            'entityManager' => '?',
        ]);
    }
}