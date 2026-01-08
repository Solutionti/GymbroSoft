<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Membresias Routes
$routes->get('/membresias', 'Membresias::index');
$routes->get('membresias/getMembresiaId/(:num)', 'Membresias::getMembresiaId/$1');
$routes->post('membresias/crear', 'Membresias::crearMembresia');
$routes->post('membresias/actualizar', 'Membresias::actualizarMembresia');

// Usuarios Routes
$routes->get('/usuarios', 'Usuarios::index');
$routes->get('usuarios/getusuariosid/(:num)', 'Usuarios::getUsuarioId/$1');
$routes->post('usuarios/crear', 'Usuarios::crearUsuario');
$routes->post('usuarios/actualizar', 'Usuarios::actualizarUsuario');
// 
$routes->get('/miembros', 'Miembros::index');

// 
$routes->get('/regular', 'Regular::index');

// 
$routes->get('/clases', 'Clases::index');

// 
$routes->get('/ventas', 'Ventas::index');

// 
$routes->get('/pagos', 'Pagos::index');
