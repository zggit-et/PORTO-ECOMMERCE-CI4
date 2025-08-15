<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');          // Main homepage
$routes->get('home', 'Home::index');      // Alternative route to homepage