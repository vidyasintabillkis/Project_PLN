<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UpController;

/**
 * @var RouteCollection $routes
 */

//DATA UP
$routes->get('/admin/up', 'UpController::index');
$routes->get('/admin/tambah up', 'UpController::tambah_up');
$routes->post('/admin/simpan up', 'UpController::simpan_up');
$routes->get('admin/(:any)/edit', [UpController::class, 'edit']);
$routes->put('admin/(:any)', [UpController::class, 'update']);
$routes->delete('admin/(:any)', [UpController::class, 'hapus']);

//DATA ULP
$routes->get('/admin/up', 'UpController::index');