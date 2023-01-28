<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('FormRendererController');
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
// $routes->get('/', 'Home::index');

// User Routes
$routes->get('/', 'PagesRenderer::index'); // This route renders the home page on the user side
// Form data processing script
$routes->post('/create-reservation', 'RegistrationController::register'); // This endpoint is for attendee registration
$routes->match(['post', 'get'],'/register', 'PagesRenderer::formPage'); // This route renders the register page/form

// Admin Dashboard routes
$routes->group('dashboard', function ($routes) {
    $routes->post('check-in', 'CheckinController::checkin', ['filter' => 'authGuard']); // This will be an api endpoint for the checkin form
    $routes->get('/', 'DashboardController::allRecords', ['filter' => 'authGuard']); // This route serves the dashnoard home page
    $routes->get('main', 'DashboardController::allRecords', ['filter' => 'authGuard']); // This route serves the dashnoard home page
    $routes->get('registered', 'DashboardController::registered', ['filter' => 'authGuard']); // This route serves the dashboard registered page
    $routes->get('checked_in', 'DashboardController::checkedIn', ['filter' => 'authGuard']); // This route serves the dashboard checkedin page
   
});

// Auth routes
$routes->get('auth/signup', 'Auth::signup');
$routes->get('auth/login', 'Auth::index');

$routes->match(['get', 'post'], 'Auth/store', 'Auth::store');
$routes->match(['get', 'post'], 'Auth/loginAuth', 'Auth::loginAuth');

$routes->get('logout', 'Auth::logout'); 
// End Auth routes



// Protect Dashboard Routes
$routes->get('/', 'DashboardController::allRecords', ['filter' => 'authGuard']); 
$routes->get('main', 'DashboardController::allRecords', ['filter' => 'authGuard']); 
$routes->get('registered', 'DashboardController::registered', ['filter' => 'authGuard']); 
$routes->get('checked_in', 'DashboardController::checkedIn', ['filter' => 'authGuard']); 
// End Dashboard routes

// Dashboard logs endpoint
$routes->get('reg-checkin-data', 'Reg_and_checkin_log::retrieveData');// This route is an enpoint to query the db and retrieve data for registration, checkin


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
