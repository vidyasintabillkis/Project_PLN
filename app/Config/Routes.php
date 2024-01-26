<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UpController;
use App\Controllers\UlpController;

/**
 * @var RouteCollection $routes
 */

//DATA UP
$routes->get('/admin/up', 'UpController::index');
$routes->get('/admin/tambah up', 'UpController::tambah_up');
$routes->post('/admin/simpan up', 'UpController::simpan_up');
$routes->get('admin/up/(:any)/edit', [UpController::class, 'edit']);
$routes->put('admin/up/(:any)', [UpController::class, 'update']);
$routes->delete('admin/up/(:any)', [UpController::class, 'hapus']);

//DATA ULP
$routes->get('/admin/ulp', 'UlpController::index');
$routes->get('/admin/tambah ulp', 'UlpController::tambah_ulp');
$routes->post('/admin/simpan ulp', 'UlpController::simpan_ulp');
$routes->get('admin/ulp/(:any)/edit', [UlpController::class, 'edit']);
$routes->put('admin/ulp/(:any)', [UlpController::class, 'update']);
$routes->delete('admin/ulp/(:any)', [UlpController::class, 'hapus']);
