<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'SigninController::index');

// Group routes for keys
$routes->group('keys', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Keys::index'); 
    $routes->get('add', 'Keys::add'); 
    $routes->post('save', 'Keys::save'); 
    $routes->get('delete/(:num)', 'Keys::delete/$1'); 
});

// Group routes for staff
$routes->group('staff', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Staff::index'); 
    $routes->get('add', 'Staff::add'); 
    $routes->post('save', 'Staff::save'); 
    $routes->get('delete/(:num)', 'Staff::delete/$1'); 
});

// Key Assignment Routes
$routes->group('keyassignment', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'KeyAssignment::index');
    $routes->get('checkout', 'KeyAssignment::checkout');
    $routes->post('saveCheckout', 'KeyAssignment::saveCheckout');
    $routes->post('updateStatus/(:num)', 'KeyAssignment::updateStatus/$1');
});

// Auth routes
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signup', 'SignupController::index');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');

// Dashboard
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authGuard']);

// News and Pages
$routes->get('news', 'News::index', ['filter' => 'authGuard']);
$routes->get('news/(:segment)', 'News::show/$1');
$routes->get('(:segment)', 'Pages::view/$1'); // Catch-all at the bottom
