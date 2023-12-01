<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'authGuard']);
$routes->get('/users', 'User::index', ['filter' => 'level2']);
$routes->get('/users/delete/(:num)', 'User::delete/$1', ['filter' => 'level2']);
$routes->post('/users/update', 'User::update', ['filter' => 'authGuard']);
$routes->get('/profile', 'User::profile', ['filter' => 'authGuard']);
$routes->get('/myprofile', 'User::myprofile', ['filter' => 'authGuard']);

$routes->get('/post/(:num)', 'Posts::getPost/$1', ['filter' => 'authGuard']);
$routes->get('/post/new', 'Posts::new', ['filter' => 'authGuard']);
$routes->get('/post/delete/(:num)', 'Posts::delete/$1', ['filter' => 'authGuard']);
$routes->get('/post/edit/(:num)', 'Posts::edit/$1', ['filter' => 'authGuard']);
$routes->post('/post/update/(:num)', 'Posts::update/$1', ['filter' => 'authGuard']);
$routes->match(['get', 'post'], '/post/store', 'Posts::store', ['filter' => 'authGuard']);

$routes->get('/about', 'Home::about');

$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->match(['get', 'post'], 'Auth/store', 'Auth::store');
$routes->match(['get', 'post'], 'Auth/loginAuth', 'Auth::loginAuth');
$routes->get('/logout', 'Auth::logout', ['filter' => 'authGuard']);
