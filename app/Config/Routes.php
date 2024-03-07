<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/1/contoh1', 'pertemuan1\Contoh1::index');
$routes->get('/2/latihan1', 'Latihan1::index');
$routes->get('/2/latihan1/(:num)/(:num)', 'Latihan1::jumlah/$1/$2');