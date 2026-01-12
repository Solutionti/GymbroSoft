<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/inicio', 'Home::index');
$routes->get('/', 'Usuarios::iniciarSesion');
$routes->post('iniciarsesion', 'Usuarios::loginApp');
$routes->get('/cerrarsesion', 'Usuarios::cerrarSesion');

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
$routes->get('/ventas/getproductoventa/(:num)', 'Ventas::getproductoventa/$1');
$routes->get('/deportistas/getDeportista/(:num)', 'Ventas::getDeportistaId/$1');

// 
$routes->get('/pagos', 'Pagos::index');

// 
$routes->get('/productos', 'Productos::index');