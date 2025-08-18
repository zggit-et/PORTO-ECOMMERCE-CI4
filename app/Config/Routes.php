<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');          // Main homepage
$routes->get('home', 'Home::index');      // Alternative route to homepage
$routes->get('category', 'Category::index'); // Route to category page
$routes->get('category', 'Category::index'); // Route to category with 5 columns
$routes->get('blog', 'Blog::index');      // Route to blog page
$routes->get('about', 'About::index');    // Route to about page
$routes->get('contact', 'Contact::index'); // Route to contact page
$routes->get('about', 'About::index');
