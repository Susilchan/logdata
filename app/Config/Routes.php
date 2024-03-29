<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('/h2', 'H2::h2');

$routes->get('/h31', 'H31::h31');
$routes->get('/h32', 'H32::h32');
$routes->get('/h33', 'H33::h33');
$routes->get('/h34', 'H34::h34');

$routes->get('/h41', 'H41::h41');
$routes->get('/h42', 'H42::h42');
$routes->get('/h43', 'H43::h43');
$routes->get('/h44', 'H44::h44');

$routes->get('/h5', 'H5::h5');


$routes->resource('logdata');
$routes->resource('penyiraman');

// $routes->post('/logdata');
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');


// $routes->resource('logdata_2');
// $routes->resource('logdata_3');
// $routes->resource('logdata_4');
// $routes->resource('logdataTrial');

// $routes
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
