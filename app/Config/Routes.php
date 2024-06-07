<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/form', 'FormController::submitForm');
$routes->get('/halodunia', 'HelloWorld::halodunia');