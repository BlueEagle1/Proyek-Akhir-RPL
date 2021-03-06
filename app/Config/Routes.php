<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about/', 'Home::about');
$routes->get('/order/', 'Home::order');
$routes->get('/order/check/', 'Home::check');
$routes->get('/order/new_order/', 'Home::new_order');
$routes->get('/order/new_order/checkout', 'Home::checkout');
$routes->get('/order/new_order/confirm_checkout/', 'Home::confirm_checkout');
$routes->get('/order/new_order/confirm_checkout/check_promo_code/', 'Home::check_promo_code');
$routes->get('/order/new_order/purge_promo/', 'Home::purge_promo');
$routes->get('/order/new_order/payment/', 'Home::payment');
$routes->get('/order/new_order/confirm_payment/', 'Home::confirm_payment');
$routes->get('/order/new_order/create_invoice/', 'Home::create_invoice');
$routes->get('/order_completed', 'Home::order_completed');
$routes->get('/order/check/status/', 'Home::status');
$routes->get('/login/', 'Home::login');
$routes->get('/login_owner', 'Home::login_owner');
$routes->get('/logout/', 'Home::logout');
$routes->get('/index_pemilik/', 'Home::index_pemilik');
$routes->get('/review', 'Home::review');
$routes->get('/cancel_order', 'Home::cancel_order');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}