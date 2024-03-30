<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->post('/auth', 'Auth::index');
$routes->get('/admin', 'Admin::index');
// $routes->setAutoRoute(true);
