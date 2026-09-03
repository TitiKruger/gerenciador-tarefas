<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/tasks', 'TaskController::index');

$routes->get('tasks/create', 'TaskController::create');
$routes->post('tasks', 'TaskController::store');

$routes->get('tasks/edit/(:num)', 'TaskController::edit/$1');
$routes->post('tasks/(:num)', 'TaskController::update/$1');

$routes->delete('tasks/delete/(:num)', 'TaskController::delete/$1');