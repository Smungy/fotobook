<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/** 
get( 'ruta_web' , controlador::funcion )
*/
$routes->get('/', 'Home::index');

//cuando entre /saludar que imprima hola mundo


$routes->get('/saludar', 'Home::saludar');

$routes->get('/saludar/(:alpha)', 'Home::saludar2/$1');

$routes->get('/saludar/(:alpha)/(:num)', 'Home::saludar3/$1/$2');
//funcion calculadora
$routes->get('/calculadora/(:num)/(:num)/(:alpha)', 'Home::calculadora/$1/$2/$3');

//USUARIOS
$routes->get('/usuarios', 'UsuarioController::index'); //todos los usuarios
$routes->get('/usuarios/(:num)', 'UsuarioController::show/$1'); //info un usario
$routes->get('/usuarios/create', 'UsuarioController::create'); //formulario crear usuario
$routes->post('/usuarios/store', 'UsuarioController::store'); //
$routes->get('/usuarios/(:num)/edit', 'UsuarioController::edit/$1');
$routes->post('/usuarios/(:num)/update', 'UsuarioController::update/$1');
$routes->get('/usuarios/(:num)/delete', 'UsuarioController::delete/$1');

$routes->get('/login','UsuarioController::login'); //iniciar sesion
$routes->post('/login','UsuarioController::validarLogin'); 
$routes->get('/logout','UsuarioController::logout'); //cerrar sesion


$routes->get('/plantilla', 'Home::plantilla');



