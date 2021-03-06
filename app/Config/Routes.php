<?php

namespace Config;

use App\Controllers\Products;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
// $routes->get('/aboutus', 'Home::aboutus', ['filter' => 'role:admin,superadmin']);
$routes->get('/aboutus', 'Home::aboutus');
$routes->get('/business', 'Home::business');
$routes->get('/contactus', 'Home::contactus');
$routes->get('/history', 'Home::history');
$routes->get('/philosophy', 'Home::philosophy');
$routes->get('/commitment', 'Home::commitment');
$routes->get('/ourfarm', 'Home::ourfarm');
$routes->get('/cows', 'Home::cows');
$routes->get('/subscribe', 'Home::subscribe');
$routes->get('/zipcheck', 'Home::zipcheck');
$routes->get('/info', 'Home::info');
$routes->get('/account_update', 'Home::account_update');
$routes->post('/account_updates', 'Home::account_updates');
$routes->get('/history_trx', 'Home::history_trx');
$routes->get('/products/subscribe/(:segment)', 'Products::subscribe/$1');
$routes->get('/products/(:segment)', 'Products::product/$1');

$routes->get('/admin/aboutus', 'Admin::aboutus');

$routes->get('/admin/product/add', 'Admin::product_add');
$routes->get('/admin/product/edit', 'Admin::product_edit');
$routes->get('/admin/product/disable', 'Admin::product_disable');
$routes->get('/admin/product/enable', 'Admin::product_enable');

$routes->get('/admin/transaction/lunas', 'Admin::transaction_lunas');
$routes->get('/admin/transaction/batal', 'Admin::transaction_batal');
$routes->get('/admin/transaction/refund', 'Admin::transaction_refund');

$routes->get('/admin/deliver/edit', 'Admin::delivery_edit');
$routes->get('/admin/deliver/add', 'Admin::delivery_add');
$routes->get('/admin/deliver/delete', 'Admin::delivery_delete');

$routes->get('/transaction/paid', 'Transaction::payment_paid');
$routes->get('/transaction/reject', 'Transaction::payment_reject');


$routes->get('/admin/zipcode/add', 'Admin::zip_add');
$routes->get('/admin/zipcode/edit', 'Admin::zip_edit');
$routes->get('/admin/zipcode/delete', 'Admin::zip_delete');


// $routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
// 	return redirect()->to(base_url());
// });
// $routes->group('admin/*', ['filter' => 'role:admin'], function ($routes) {
// 	return redirect()->to(base_url());
// });

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
