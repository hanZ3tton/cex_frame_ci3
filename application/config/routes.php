<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'auth/login';

$route['admin/account'] = 'v3/admin/account/index';

$route['admin/dashboard'] = 'v3/admin/dashboard/index';

$route['admin/inbound/all'] = 'v3/admin/inbound/index';
$route['admin/inbound'] = 'v3/admin/inbound/not_process';
$route['admin/inbound/create'] = 'v3/admin/inbound/create';
$route['admin/inbound/edit/(:any)'] = 'v3/admin/inbound/edit/$1';
$route['admin/inbound/delete/(:any)'] = 'v3/admin/inbound/delete/$1';

$route['admin/order'] = 'v3/admin/order';
$route['admin/order/completed'] = 'v3/admin/order/completed';

$route['admin/outbound'] = 'v3/admin/outbound/index';
$route['admin/outbound/scanner'] = 'v3/admin/outbound/scanner';

$route['admin/data-ho'] = 'v3/admin/data_ho/index';
$route['admin/data-ho/inbound'] = 'v3/admin/data_ho/inbound';
$route['admin/data-ho/cleansing'] = 'v3/admin/data_ho/cleansing';

$route['admin/tracking'] = 'v3/admin/tracking/index';

$route['admin/kalog'] = 'v3/admin/kalog/index';
$route['admin/kalog/create'] = 'v3/admin/kalog/create';

$route['admin/cargo/jnt'] = 'v3/admin/cargo/index';
$route['admin/cargo/jnt/create'] = 'v3/admin/cargo/create';
$route['admin/cargo/jnt/detail/(:any)'] = 'v3/admin/cargo/detail';

$route['admin/domestic/shipment'] = 'v3/admin/domestic/index';
$route['admin/domestic/jnt-express'] = 'v3/admin/domestic/jnt_express';

$route['admin/shipping-rates'] = 'v3/admin/shipping_rates';

$route['admin/user-management'] = 'v3/admin/user/index';
$route['admin/user-management/create'] = 'v3/admin/user/create';
$route['admin/user-management/edit/(:any)'] = 'v3/admin/user/edit';
$route['admin/user-management/change-password/(:any)'] = 'v3/admin/user/change_password';
$route['admin/user-management/delete/(:any)'] = 'v3/admin/user/delete';

$route['admin/topup'] = 'v3/admin/topup/index';
$route['admin/topup/create'] = 'v3/admin/topup/create';

// $route['admin/order'] = 'v3/admin/order/index';
// $route['admin/order/completed'] = 'v3/admin/order/completed';
// $route['admin/order/outbound'] = 'v3/admin/outbound/index';