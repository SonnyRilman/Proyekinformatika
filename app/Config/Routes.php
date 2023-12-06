<?php

use App\Controllers\LoginController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// routes home
$routes->get('/', 'HomeBeta::index');
$routes->get('/about', 'HomeBeta::about');
$routes->get('/testimoni', 'HomeBeta::testimoni');
$routes->get('/jenis-ikan', 'HomeBeta::fish');
$routes->get('/login', 'HomeBeta::login');
$routes->get('/registrasi', 'HomeBeta::registrasi');
$routes->get('/kontak', 'HomeBeta::kontak');
$routes->get('/profilfounders', 'HomeBeta::profil');
// app/Config/Routes.php
//routes admin
// app/Config/Routes.php

// app/Config/Routes.php
$routes->get('/', 'Admin::index');
$routes->get('/update', 'AdminController::updateDataIkan');
$routes->get('/keuangan', 'AdminController::kelolaKeuangan');
$routes->get('/ikan', 'AdminController::ikan');
$routes->get('/add', 'AdminController::add');
$routes->post('/admin/simpanDataIkan', 'AdminController::simpanDataIkan'); // Sesuaikan dengan path yang digunakan di form
$routes->get('/admin_home', 'AdminController::index');
$routes->get('/admin/success', 'AdminController::success');
// File: app/config/Routes.php

$routes->get('/admin/konfirmasi-pesanan', 'AdminController::konfirmasiPesanan');
$routes->get('admin/konfirmasi-pesanan/(:segment)', 'AdminController::confirmOrder/$1');


$routes->get('/admin/kelola-keuangan', 'AdminController::kelolaKeuangan');




// Tambahkan rute tambahan sesuai kebutuhan
// Rute untuk edit data ikan

$routes->get('admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('admin/updateDataIkan', 'AdminController::updateDataIkan');
// app/Config/Routes.php


$routes->get('delete/(:num)', 'AdminController::delete/$1');
$routes->post('admin/confirmDelete', 'AdminController::confirmDelete');
$routes->get('admin/admin_home', 'AdminController::deletee');
// File: app/Config/Routes.php

// app/Config/Routes.php

$routes->get('admin/ikan-list', 'AdminController::tampilIkanList');


// $routes->group('admin', ['filter' => 'adminAuth'], function ($routes) {
//     // ...
//     $routes->add('add', 'AdminController::add');
//     $routes->post('addDataIkanProcess', 'AdminController::addDataIkanProcess');
//     // ...
// });

//jenis
$routes->get('jenis/halfmoon', 'Jenis::halfmoon');
$routes->get('/crowntail', 'Jenis::crowntail');
$routes->get('/giant', 'Jenis::giant');
$routes->get('/plakat', 'Jenis::plakat');
$routes->get('/femalehalfmoon', 'Jenis::femalehalfmoon');
$routes->get('/femaleplakat', 'Jenis::femaleplakat');



// Rute untuk halaman costumer

$routes->get('/customer', 'CustomerController::index');
$routes->get('/beli', 'CustomerController::beli');
$routes->get('/customer/beli/(:num)', 'CustomerController::tampilkanFormPembelian/$1');
$routes->post('/customer/proses-pembelian', 'CustomerController::prosesPembelian');
$routes->get('/customer/success', 'CustomerController::success');
$routes->get('/costumer_home', 'CustomerController::index');


//jenis
$routes->get('jenis/halfmoon', 'CustomerController::halfmoon');
$routes->get('/crowntail', 'CustomerController::crowntail');
$routes->get('/giant', 'CustomerController::giant');
$routes->get('/plakat', 'CustomerController::plakat');
$routes->get('/femalehalfmoon', 'CustomerController::femalehalfmoon');
$routes->get('/femaleplakat', 'CustomerController::femaleplakat');









// Route untuk halaman login
$routes->get('login', [LoginController::class, 'index']);
$routes->post('prosesLogin', [LoginController::class, 'prosesLogin']);
$routes->post('login/prosesLogin', 'LoginController::prosesLogin');


$routes->get('registrasi', 'RegistrasiController::index');
$routes->post('registrasi/simpanRegistrasi', 'RegistrasiController::simpanRegistrasi');




