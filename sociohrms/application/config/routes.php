<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'Dashboard';

$route['login'] = 'Dashboard/login';
$route['logout'] = 'auth/logout';

$route['payslips'] = 'PayrollController/payslips';
$route['payslip/(:any)'] = 'PayrollController/payslip_single/$1';

$route['api/auth-login'] = 'api/AuthController/login';
$route['api-auth-register'] = 'auth/register';

$route['api/salary-slip/import'] = 'api/SalarySlipController/import_csv';
$route['api/salary-slip/generate'] = 'api/SalarySlipController/bulk_generate';
$route['api/salary-slip/bulk-generate'] = 'api/SalarySlipController/make_pdf';

$route['register'] = 'Dashboard/register';

$route[''] = 'Dashboard/index';
$route['menu'] = 'Dashboard/menu_master';
$route['menu/categories'] = 'Dashboard/categories_all';
$route['menu/category/(:any)/menu-items'] = 'Dashboard/menu_items/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
