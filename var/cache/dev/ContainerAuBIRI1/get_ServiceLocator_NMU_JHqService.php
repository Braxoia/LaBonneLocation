<?php

namespace ContainerAuBIRI1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NMU_JHqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nMU.jHq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nMU.jHq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::displayBillings' => ['privates', '.service_locator.2fd6wDq', 'get_ServiceLocator_2fd6wDqService', true],
            'App\\Controller\\AdminController::displayCars' => ['privates', '.service_locator.wCQHzIb', 'get_ServiceLocator_WCQHzIbService', true],
            'App\\Controller\\AdminController::displayUsers' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\AdminController::editCar' => ['privates', '.service_locator.9_t6y2y', 'get_ServiceLocator_9T6y2yService', true],
            'App\\Controller\\AdminController::removeCar' => ['privates', '.service_locator.Hgc.O0.', 'get_ServiceLocator_Hgc_O0_Service', true],
            'App\\Controller\\AdminController::removeUser' => ['privates', '.service_locator.8niayox', 'get_ServiceLocator_8niayoxService', true],
            'App\\Controller\\BillingController::carPaied' => ['privates', '.service_locator.TDX3rGe', 'get_ServiceLocator_TDX3rGeService', true],
            'App\\Controller\\BillingController::index' => ['privates', '.service_locator.EHv9p_S', 'get_ServiceLocator_EHv9pSService', true],
            'App\\Controller\\BillingController::remove' => ['privates', '.service_locator.c6N7tlf', 'get_ServiceLocator_C6N7tlfService', true],
            'App\\Controller\\BillingController::rentCar' => ['privates', '.service_locator.rVpUxYQ', 'get_ServiceLocator_RVpUxYQService', true],
            'App\\Controller\\BillingController::returnCar' => ['privates', '.service_locator.FhMK9Vw', 'get_ServiceLocator_FhMK9VwService', true],
            'App\\Controller\\BillingController::showAllClient' => ['privates', '.service_locator.pv1bGyM', 'get_ServiceLocator_Pv1bGyMService', true],
            'App\\Controller\\BillingController::showBill' => ['privates', '.service_locator.Kln4w22', 'get_ServiceLocator_Kln4w22Service', true],
            'App\\Controller\\BillingController::showMonthlyBill' => ['privates', '.service_locator.Kln4w22', 'get_ServiceLocator_Kln4w22Service', true],
            'App\\Controller\\CarController::showCar' => ['privates', '.service_locator.t1uKgeN', 'get_ServiceLocator_T1uKgeNService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\DashboardController::addCar' => ['privates', '.service_locator.QhOf4G0', 'get_ServiceLocator_QhOf4G0Service', true],
            'App\\Controller\\DashboardController::deleteCar' => ['privates', '.service_locator.FhMK9Vw', 'get_ServiceLocator_FhMK9VwService', true],
            'App\\Controller\\DashboardController::index' => ['privates', '.service_locator.7CdUunF', 'get_ServiceLocator_7CdUunFService', true],
            'App\\Controller\\DashboardController::showAllOwnedCars' => ['privates', '.service_locator.wCQHzIb', 'get_ServiceLocator_WCQHzIbService', true],
            'App\\Controller\\DashboardController::showAllRentedCars' => ['privates', '.service_locator.2fd6wDq', 'get_ServiceLocator_2fd6wDqService', true],
            'App\\Controller\\DashboardController::showMyRentedCars' => ['privates', '.service_locator.c6N7tlf', 'get_ServiceLocator_C6N7tlfService', true],
            'App\\Controller\\IndexController::index' => ['privates', '.service_locator.SONb_qU', 'get_ServiceLocator_SONbQUService', true],
            'App\\Controller\\IndexController::showAllCars' => ['privates', '.service_locator.SONb_qU', 'get_ServiceLocator_SONbQUService', true],
            'App\\Controller\\SecurityController::destroyShoppingBag' => ['privates', '.service_locator.TDX3rGe', 'get_ServiceLocator_TDX3rGeService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.hdrCzai', 'get_ServiceLocator_HdrCzaiService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:displayBillings' => ['privates', '.service_locator.2fd6wDq', 'get_ServiceLocator_2fd6wDqService', true],
            'App\\Controller\\AdminController:displayCars' => ['privates', '.service_locator.wCQHzIb', 'get_ServiceLocator_WCQHzIbService', true],
            'App\\Controller\\AdminController:displayUsers' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\AdminController:editCar' => ['privates', '.service_locator.9_t6y2y', 'get_ServiceLocator_9T6y2yService', true],
            'App\\Controller\\AdminController:removeCar' => ['privates', '.service_locator.Hgc.O0.', 'get_ServiceLocator_Hgc_O0_Service', true],
            'App\\Controller\\AdminController:removeUser' => ['privates', '.service_locator.8niayox', 'get_ServiceLocator_8niayoxService', true],
            'App\\Controller\\BillingController:carPaied' => ['privates', '.service_locator.TDX3rGe', 'get_ServiceLocator_TDX3rGeService', true],
            'App\\Controller\\BillingController:index' => ['privates', '.service_locator.EHv9p_S', 'get_ServiceLocator_EHv9pSService', true],
            'App\\Controller\\BillingController:remove' => ['privates', '.service_locator.c6N7tlf', 'get_ServiceLocator_C6N7tlfService', true],
            'App\\Controller\\BillingController:rentCar' => ['privates', '.service_locator.rVpUxYQ', 'get_ServiceLocator_RVpUxYQService', true],
            'App\\Controller\\BillingController:returnCar' => ['privates', '.service_locator.FhMK9Vw', 'get_ServiceLocator_FhMK9VwService', true],
            'App\\Controller\\BillingController:showAllClient' => ['privates', '.service_locator.pv1bGyM', 'get_ServiceLocator_Pv1bGyMService', true],
            'App\\Controller\\BillingController:showBill' => ['privates', '.service_locator.Kln4w22', 'get_ServiceLocator_Kln4w22Service', true],
            'App\\Controller\\BillingController:showMonthlyBill' => ['privates', '.service_locator.Kln4w22', 'get_ServiceLocator_Kln4w22Service', true],
            'App\\Controller\\CarController:showCar' => ['privates', '.service_locator.t1uKgeN', 'get_ServiceLocator_T1uKgeNService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\DashboardController:addCar' => ['privates', '.service_locator.QhOf4G0', 'get_ServiceLocator_QhOf4G0Service', true],
            'App\\Controller\\DashboardController:deleteCar' => ['privates', '.service_locator.FhMK9Vw', 'get_ServiceLocator_FhMK9VwService', true],
            'App\\Controller\\DashboardController:index' => ['privates', '.service_locator.7CdUunF', 'get_ServiceLocator_7CdUunFService', true],
            'App\\Controller\\DashboardController:showAllOwnedCars' => ['privates', '.service_locator.wCQHzIb', 'get_ServiceLocator_WCQHzIbService', true],
            'App\\Controller\\DashboardController:showAllRentedCars' => ['privates', '.service_locator.2fd6wDq', 'get_ServiceLocator_2fd6wDqService', true],
            'App\\Controller\\DashboardController:showMyRentedCars' => ['privates', '.service_locator.c6N7tlf', 'get_ServiceLocator_C6N7tlfService', true],
            'App\\Controller\\IndexController:index' => ['privates', '.service_locator.SONb_qU', 'get_ServiceLocator_SONbQUService', true],
            'App\\Controller\\IndexController:showAllCars' => ['privates', '.service_locator.SONb_qU', 'get_ServiceLocator_SONbQUService', true],
            'App\\Controller\\SecurityController:destroyShoppingBag' => ['privates', '.service_locator.TDX3rGe', 'get_ServiceLocator_TDX3rGeService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.hdrCzai', 'get_ServiceLocator_HdrCzaiService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::displayBillings' => '?',
            'App\\Controller\\AdminController::displayCars' => '?',
            'App\\Controller\\AdminController::displayUsers' => '?',
            'App\\Controller\\AdminController::editCar' => '?',
            'App\\Controller\\AdminController::removeCar' => '?',
            'App\\Controller\\AdminController::removeUser' => '?',
            'App\\Controller\\BillingController::carPaied' => '?',
            'App\\Controller\\BillingController::index' => '?',
            'App\\Controller\\BillingController::remove' => '?',
            'App\\Controller\\BillingController::rentCar' => '?',
            'App\\Controller\\BillingController::returnCar' => '?',
            'App\\Controller\\BillingController::showAllClient' => '?',
            'App\\Controller\\BillingController::showBill' => '?',
            'App\\Controller\\BillingController::showMonthlyBill' => '?',
            'App\\Controller\\CarController::showCar' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\DashboardController::addCar' => '?',
            'App\\Controller\\DashboardController::deleteCar' => '?',
            'App\\Controller\\DashboardController::index' => '?',
            'App\\Controller\\DashboardController::showAllOwnedCars' => '?',
            'App\\Controller\\DashboardController::showAllRentedCars' => '?',
            'App\\Controller\\DashboardController::showMyRentedCars' => '?',
            'App\\Controller\\IndexController::index' => '?',
            'App\\Controller\\IndexController::showAllCars' => '?',
            'App\\Controller\\SecurityController::destroyShoppingBag' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:displayBillings' => '?',
            'App\\Controller\\AdminController:displayCars' => '?',
            'App\\Controller\\AdminController:displayUsers' => '?',
            'App\\Controller\\AdminController:editCar' => '?',
            'App\\Controller\\AdminController:removeCar' => '?',
            'App\\Controller\\AdminController:removeUser' => '?',
            'App\\Controller\\BillingController:carPaied' => '?',
            'App\\Controller\\BillingController:index' => '?',
            'App\\Controller\\BillingController:remove' => '?',
            'App\\Controller\\BillingController:rentCar' => '?',
            'App\\Controller\\BillingController:returnCar' => '?',
            'App\\Controller\\BillingController:showAllClient' => '?',
            'App\\Controller\\BillingController:showBill' => '?',
            'App\\Controller\\BillingController:showMonthlyBill' => '?',
            'App\\Controller\\CarController:showCar' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\DashboardController:addCar' => '?',
            'App\\Controller\\DashboardController:deleteCar' => '?',
            'App\\Controller\\DashboardController:index' => '?',
            'App\\Controller\\DashboardController:showAllOwnedCars' => '?',
            'App\\Controller\\DashboardController:showAllRentedCars' => '?',
            'App\\Controller\\DashboardController:showMyRentedCars' => '?',
            'App\\Controller\\IndexController:index' => '?',
            'App\\Controller\\IndexController:showAllCars' => '?',
            'App\\Controller\\SecurityController:destroyShoppingBag' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
