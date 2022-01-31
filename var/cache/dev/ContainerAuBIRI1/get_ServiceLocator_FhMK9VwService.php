<?php

namespace ContainerAuBIRI1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FhMK9VwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FhMK9Vw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FhMK9Vw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'billingRepository' => ['privates', 'App\\Repository\\BillingRepository', 'getBillingRepositoryService', true],
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'billingRepository' => 'App\\Repository\\BillingRepository',
            'carRepository' => 'App\\Repository\\CarRepository',
            'manager' => '?',
        ]);
    }
}