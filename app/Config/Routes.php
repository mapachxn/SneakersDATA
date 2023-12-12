<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rutas para visualización de sneakers.
$routes->get('/sneaker/mostrar', 'Sneaker::mostrar');
$routes->get('/sneaker/agregar', 'Sneaker::agregar');
$routes->post('/sneaker/agregar','Sneaker::agregar');
$routes->get('/sneaker/buscar', 'Sneaker::buscar');
$routes->get('/sneaker/editar/(:num)', 'Sneaker::editar/$1');
$routes->get('/sneaker/delete/(:num)','Sneaker::delete/$1');
$routes->post('/sneaker/update', 'Sneaker::update');

// Rutas para marcas de sneakers.
$routes->get('/marca/mostrar', 'Marca::mostrar');
$routes->get('/marca/agregar', 'Marca::agregar');
$routes->post('/marca/agregar','Marca::agregar');
$routes->get('/marca/buscar', 'Marca::buscar');
$routes->get('/marca/editar/(:num)', 'Marca::editar/$1');
$routes->get('/marca/delete/(:num)','Marca::delete/$1');
$routes->post('/marca/update', 'Marca::update');

// Rutas para administración de los usuarios.
$routes->get('/usuario/mostrar', 'Usuario::mostrar');
$routes->get('/usuario/agregar', 'Usuario::agregar');
$routes->post('/usuario/agregar','Usuario::agregar');
$routes->get('/usuario/buscar', 'Usuario::buscar');
$routes->get('/usuario/editar/(:num)', 'Usuario::editar/$1');
$routes->get('/usuario/delete/(:num)','Usuario::delete/$1');
$routes->post('/usuario/update', 'Usuario::update');

// BETA de Login.
$routes->get('navigation', 'NavigationController::index');

// BETA de About.
$routes->get('about', 'AboutController::index');

// BETA de frontend (te amo pita)
$routes->get('showsneakers', 'Designus::mostrarSneakers');

// BETA de rutas para marcas con imágenes.
$routes->get('mostrarmarca', 'Designus::mostrarMarcas');













