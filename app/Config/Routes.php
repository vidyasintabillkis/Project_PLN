<?php

use App\Controllers\AjaxController;
use App\Controllers\GfrController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\UpController;
use App\Controllers\UlpController;
use App\Controllers\GiController;
use App\Controllers\OcrController;
use App\Controllers\PenyulangController;
use App\Controllers\RelayController;

/**
 * @var RouteCollection $routes
 */


// Landingpage
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/logout', 'Home::processLogout');
$routes->post('/login/gate', 'Home::processLogin'); 
$routes->get('/nonup2d/tim', 'Home::profile');
$routes->get('/nonup2d/profile', 'Home::tim');

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

//DATA Relay
$routes->get('/admin/relay', 'RelayController::index');
$routes->get('/admin/tambah relay', 'RelayController::tambah');
$routes->post('/admin/simpan relay', 'RelayController::simpan');
$routes->get('admin/relay/(:any)/edit', [RelayController::class, 'edit']);
$routes->put('admin/relay/(:any)', [RelayController::class, 'update']);
$routes->delete('admin/relay/(:any)', [RelayController::class, 'hapus']);
$routes->get('/admin/relay/(:any)', 'RelayController::lihat/$1');

//DATA OCR
$routes->get('/admin/ocr', 'OcrController::index');
$routes->get('/admin/tambah ocr', 'OcrController::tambah');
$routes->post('/admin/simpan ocr', 'OcrController::simpan');
$routes->get('admin/ocr/(:any)/edit', [OcrController::class, 'edit']);
$routes->put('admin/ocr/(:any)', [OcrController::class, 'update']);
$routes->delete('admin/ocr/(:any)', [OcrController::class, 'hapus']);

//DATA OCR
$routes->get('/admin/gfr', 'GfrController::index');
$routes->get('/admin/tambah gfr', 'GfrController::tambah');
$routes->post('/admin/simpan gfr', 'GfrController::simpan');
$routes->get('admin/gfr/(:any)/edit', [GfrController::class, 'edit']);
$routes->put('admin/gfr/(:any)', [GfrController::class, 'update']);
$routes->delete('admin/gfr/(:any)', [GfrController::class, 'hapus']);

//CARI
$routes->get('/admin/cari', 'Home::cari');
$routes->post('/admin/cari', 'CariController::cari');
$routes->post('ajax/fetch-data/?(:any)', [AjaxController::class,'fetchData']);
$routes->get('ajax/fetch-data/?(:any)', [AjaxController::class,'fetchData']);