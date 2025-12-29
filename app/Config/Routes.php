<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/membresias', 'Membresias::index');
$routes->get('/usuarios', 'Usuarios::index');
$routes->get('/miembros', 'Miembros::index');
$routes->get('/regular', 'Regular::index');
$routes->get('/clases', 'Clases::index');
$routes->get('/ventas', 'Ventas::index');
$routes->get('/pagos', 'Pagos::index');
