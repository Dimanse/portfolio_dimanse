<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AdminController;
use Controllers\LoginController;
use Controllers\ImagenController;
use Controllers\PaginasController;

$router = new Router();



$router->get('/', [PaginasController::class, 'index']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);


$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/olvide', [loginController::class, 'olvide']);
$router->post('/olvide', [loginController::class, 'olvide']);
$router->get('/mesage', [loginController::class, 'mesage']);
$router->get('/recuperar', [loginController::class, 'recuperar']);
$router->post('/recuperar', [loginController::class, 'recuperar']);



$router->get('/admin', [AdminController::class, 'index']);
$router->get('/admin/correos', [AdminController::class, 'correos']);
$router->post('/admin/correos/eliminar', [AdminController::class, 'correo_eliminar']);

$router->get('/admin/trabajos', [AdminController::class, 'trabajos']);

$router->get('/admin/trabajo/crear', [AdminController::class, 'crear']);
$router->post('/admin/trabajo/crear', [AdminController::class, 'crear']);

$router->post('/imagenes', [ImagenController::class, 'imagen']);

$router->get('/admin/trabajo/editar', [AdminController::class, 'editar']);
$router->post('/admin/trabajo/editar', [AdminController::class, 'editar']);

$router->post('/admin/trabajo/eliminar', [AdminController::class, 'trabajo_eliminar']);



$router->comprobarRutas();