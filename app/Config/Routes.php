<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Route;

// Routes for Dosen controller
$routes->get('dosen', 'Dosen::index');
$routes->get('dosen/create', 'Dosen::create');
$routes->post('dosen/store', 'Dosen::store');
$routes->get('dosen/edit/(:num)', 'Dosen::edit/$1');
$routes->post('dosen/update', 'Dosen::update');
$routes->get('dosen/delete/(:num)', 'Dosen::delete/$1');
// Routes for Staff controller
$routes->get('staff', 'Staff::index');
$routes->get('staff/create', 'Staff::create');
$routes->post('staff/store', 'Staff::store');
$routes->get('staff/edit/(:num)', 'Staff::edit/$1');
$routes->post('staff/update', 'Staff::update');
$routes->get('staff/delete/(:num)', 'Staff::delete/$1');

// Ensure default route is always last
$routes->get('/', 'Home::index');

