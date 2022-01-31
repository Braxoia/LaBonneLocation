<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/ajouterVoiture' => [[['_route' => 'admin_addCar', '_controller' => 'App\\Controller\\AdminController::createCar'], null, null, null, false, false, null]],
        '/admin/cars' => [[['_route' => 'admin_cars', '_controller' => 'App\\Controller\\AdminController::displayCars'], null, null, null, false, false, null]],
        '/admin/billings' => [[['_route' => 'admin_billings', '_controller' => 'App\\Controller\\AdminController::displayBillings'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::displayUsers'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier_client', '_controller' => 'App\\Controller\\BillingController::index'], null, null, null, false, false, null]],
        '/facture/mesClients' => [[['_route' => 'show_all_client', '_controller' => 'App\\Controller\\BillingController::showAllClient'], null, null, null, false, false, null]],
        '/facture/parMois' => [[['_route' => 'show_month_bill', '_controller' => 'App\\Controller\\BillingController::showMonthlyBill'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboard/ajouterVoiture' => [[['_route' => 'addCar', '_controller' => 'App\\Controller\\DashboardController::addCar'], null, null, null, false, false, null]],
        '/dashboard/mesVoitures' => [[['_route' => 'show_owned_cars', '_controller' => 'App\\Controller\\DashboardController::showAllOwnedCars'], null, null, null, false, false, null]],
        '/dashboard/voituresLouees' => [[['_route' => 'showRentedCars', '_controller' => 'App\\Controller\\DashboardController::showAllRentedCars'], null, null, null, false, false, null]],
        '/dashboard/mesLocations' => [[['_route' => 'show_my_rented_cars', '_controller' => 'App\\Controller\\DashboardController::showMyRentedCars'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/index/catalogue' => [[['_route' => 'show_all_cars', '_controller' => 'App\\Controller\\IndexController::showAllCars'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/suppressionPanier' => [[['_route' => 'destroy_bag', '_controller' => 'App\\Controller\\SecurityController::destroyShoppingBag'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|car/(?'
                        .'|modify/([^/]++)(*:200)'
                        .'|supprimer/([^/]++)(*:226)'
                    .')'
                    .'|user/supprimer/([^/]++)(*:258)'
                .')'
                .'|/facture/(?'
                    .'|client/([^/]++)(*:294)'
                    .'|parClient/([^/]++)(*:320)'
                .')'
                .'|/panier/(?'
                    .'|ajouter/([^/]++)(*:356)'
                    .'|supprimer/([^/]++)(*:382)'
                .')'
                .'|/dashboard/(?'
                    .'|retournerVoiture/([^/]++)(*:430)'
                    .'|supprimer/([^/]++)(*:456)'
                .')'
                .'|/voiture/caracteristiques/([^/]++)(*:499)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        200 => [[['_route' => 'admin_editCar', '_controller' => 'App\\Controller\\AdminController::editCar'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'admin_remove_car', '_controller' => 'App\\Controller\\AdminController::removeCar'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'admin_remove_user', '_controller' => 'App\\Controller\\AdminController::removeUser'], ['id'], null, null, false, true, null]],
        294 => [[['_route' => 'billing_rent', '_controller' => 'App\\Controller\\BillingController::rentCar'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'show_bill', '_controller' => 'App\\Controller\\BillingController::showBill'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'panier_payer', '_controller' => 'App\\Controller\\BillingController::carPaied'], ['id'], null, null, false, true, null]],
        382 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\BillingController::remove'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'dashboard_return_car', '_controller' => 'App\\Controller\\BillingController::returnCar'], ['id'], null, null, false, true, null]],
        456 => [[['_route' => 'delete_car', '_controller' => 'App\\Controller\\DashboardController::deleteCar'], ['idCar'], null, null, false, true, null]],
        499 => [
            [['_route' => 'car_show', '_controller' => 'App\\Controller\\CarController::showCar'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
