<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UpController;
use App\Controllers\UlpController;
use App\Controllers\GiController;
use App\Controllers\PenyulangController;

/**
 * @var RouteCollection $routes
 */


// Landingpage
$routes->get('/up2d', 'Home::index');
$routes->get('/nonup2d/tim', 'Home::tim');

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

//DATA GI
$routes->get('/admin/gi', 'GiController::index');
$routes->get('/admin/tambah gi', 'GiController::tambah_gi');
$routes->post('/admin/simpan gi', 'GiController::simpan_gi');
$routes->get('admin/gi/(:any)/edit', [GiController::class, 'edit']);
$routes->put('admin/gi/(:any)', [GiController::class, 'update']);
$routes->delete('admin/gi/(:any)', [GiController::class, 'hapus']);

//DATA Penyulang 
$routes->get('/admin/penyulang', 'PenyulangController::index');
$routes->get('/admin/tambah penyulang', 'PenyulangController::tambah');
$routes->post('/admin/simpan penyulang', 'PenyulangController::simpan');
$routes->get('admin/penyulang/(:any)/edit', [PenyulangController::class, 'edit']);
$routes->put('admin/penyulang/(:any)', [PenyulangController::class, 'update']);
$routes->delete('admin/penyulang/(:any)', [PenyulangController::class, 'hapus']);

