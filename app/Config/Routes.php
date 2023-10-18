<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('baptis', function($routes){
    $routes->get('/', 'Baptis::index');
    $routes->get('read', 'Baptis::read');
    $routes->post('store', 'Baptis::store');
    $routes->put('update', 'Baptis::update');
    $routes->delete('delete/(:any)', 'Baptis::delete/$1');
});
$routes->group('sidi', function($routes){
    $routes->get('/', 'Sidi::index');
    $routes->get('read', 'Sidi::read');
    $routes->post('store', 'Sidi::store');
    $routes->put('update', 'Sidi::update');
    $routes->delete('delete/(:any)', 'Sidi::delete/$1');
});
$routes->group('nikah', function($routes){
    $routes->get('/', 'Nikah::index');
    $routes->get('read', 'Nikah::read');
    $routes->post('store', 'Nikah::store');
    $routes->put('update', 'Nikah::update');
    $routes->delete('delete/(:any)', 'Nikah::delete/$1');
});

