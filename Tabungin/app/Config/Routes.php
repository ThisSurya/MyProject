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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
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

//need autentication
$routes->get('/register', 'Auth::index' );
$routes->get('/auth', 'Auth::verification');
$routes->get('/logout', 'Auth::logout');

//Akses post login
$routes->get('/', 'Home::index', ['filter'=>'cekLogin']);
$routes->get('/update', 'Home::updateForm', ['filter'=>'cekLogin']);
$routes->get('/updateProfile', 'Updateprofile::index', ['filter'=>'cekLogin']);
$routes->get('/catatan', 'Catatan::index', ['filter'=>'cekLogin']);
$routes->get('/newlaporan', 'Catatan::Inserttable', ['filter'=>'cekLogin']);
$routes->get('/updateLaporan/(:segment)', 'Home::updatelaporan/$1', ['filter'=>'cekLogin']);
$routes->get('/updateForm', 'Catatan::updateform', ['filter'=>'cekLogin']);

//fitur
$routes->post('/add_User', 'Auth::addUser');
$routes->post('/login', 'Auth::login');
$routes->post('/catatan', 'Catatan::Insertdata');
$routes->post('/updateData', 'Catatan::Updatedata');
$routes->post('/updateProfile', 'Updateprofile::Updatedata');


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
