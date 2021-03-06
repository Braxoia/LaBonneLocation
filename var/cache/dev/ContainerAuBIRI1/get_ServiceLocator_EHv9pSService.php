<?php

namespace ContainerAuBIRI1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EHv9pSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EHv9p_S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EHv9p_S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'billingRepository' => ['privates', 'App\\Repository\\BillingRepository', 'getBillingRepositoryService', true],
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'billingRepository' => 'App\\Repository\\BillingRepository',
            'carRepository' => 'App\\Repository\\CarRepository',
            'manager' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
