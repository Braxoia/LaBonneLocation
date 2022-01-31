<?php

namespace ContainerJoxHilX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7CdUunFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7CdUunF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7CdUunF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'billingRepository' => ['privates', 'App\\Repository\\BillingRepository', 'getBillingRepositoryService', true],
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
        ], [
            'billingRepository' => 'App\\Repository\\BillingRepository',
            'carRepository' => 'App\\Repository\\CarRepository',
        ]);
    }
}
