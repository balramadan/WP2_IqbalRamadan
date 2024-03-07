<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/latihan1', 'Latihan1::index');
$routes->get('/latihan1/(:num)/(:num)', 'Latihan1::jumlah/$1/$2');