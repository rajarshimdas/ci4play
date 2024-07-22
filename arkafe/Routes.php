<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', '\Arkafe\Website\Controllers\Site::index');
$routes->get('home', '\Arkafe\Website\Controllers\Site::index');

$routes->get('concert', '\Arkafe\Website\Controllers\Site::concert');

