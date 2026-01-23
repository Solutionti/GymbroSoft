<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', ['filter' => 'noauth'], function($routes) {
  $routes->get('/', 'Usuarios::iniciarSesion');
});

$routes->post('iniciarsesion', 'Usuarios::loginApp');
$routes->get('/cerrarsesion', 'Usuarios::cerrarSesion');



$routes->group('', ['filter' => 'auth'], function($routes) {
$routes->get('/inicio', 'Home::index');
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
$routes->post('clases/crearHorario', 'Clases::crearHorario');
$routes->post('clases/crearClaseCalendario', 'Clases::crearClaseCalendario');
$routes->get('clases/getClasesHorarios', 'Clases::getClasesHorarios');


// 
$routes->get('/ventas', 'Ventas::index');
$routes->get('/ventas/getproductoventa/(:num)', 'Ventas::getproductoventa/$1');
$routes->get('/deportistas/getDeportista/(:num)', 'Ventas::getDeportistaId/$1');
$routes->post('ventas/finalizarVenta', 'Ventas::finalizarVenta');
$routes->post('ventas/crearDeportista', 'Ventas::crearDeportista');
$routes->post('ventas/CrearVariableSesion', 'Ventas::CrearVariableSesion');
$routes->post('ventas/actualizarDeportistaEstado', 'Ventas::actualizarDeportistaEstado');
// 
$routes->get('/pagos', 'Pagos::index');
// 
$routes->get('/productos', 'Productos::index');
$routes->post('productos/crear', 'Productos::crearProductos');
$routes->get('productos/getProductosId/(:num)', 'Productos::getProductosId/$1');
$routes->post('productos/ingresoKardex', 'Productos::ingresoKardex');
$routes->post('productos/salidaKardex', 'Productos::salidaKardex');
$routes->post('productos/actualizar', 'Productos::actualizarProductos');
});
//
$routes->get('/inscripciones', 'Home::inscripciones');
$routes->post('clases/crearInscripciones', 'Clases::crearInscripciones');
$routes->get('/respuestaInscripcion', 'Home::respuestaInscripcion');