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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*spg role controller*/
//dashboard
$route['install']					='spg/Spg/CREATE_SYSTEM';
$route['destroy']					='spg/Spg/DESTROY_SYSTEM';
$route['spg'] 						= 'spg/Spg';
$route['spg/logout'] 				= 'spg/Spg/logout';// logout and redirect to login page
$route['spg/notification']			= 'spg/Spg/notification_view';// display notification
$route['spg/company/registration']	= 'spg/Spg/company_registration_view';// display company registration view
$route['spg/company/save']			= 'spg/Spg/add_company';// display company registration view

$route['spg/company/act']			= 'spg/Spg/act_view'; //display act view for company
$route['spg/company/attachAct']		= 'spg/Spg/attachAct'; //display act view for company


/* create acts*/
$route['spg/act/create']		= 'spg/Spg/create_Act'; // display register act form
$route['spg/act/save']			= 'spg/Spg/save_Act'; // insert act to database

/* work with Employee*/
$route['spg/employee/create']		= 'spg/Spg/view_employee_form'; // show Employee master form
$route['spg/employee/save']			= 'spg/Spg/save_employee'; // insert Employee master form
$route['spg/employee/show']			= 'spg/Spg/view_employee_master'; // show Employee master table
$route['spg/employee/show/(:num)']	= 'spg/Spg/view_employee_master'; // show Employee master table


/* work with salary*/
$route['spg/salary/import']	= 'spg/Spg/import_salary';//display salary file upload form


/* work with Reports */
$route['spg/report/sanitize']	= 'spg/Spg/genrate_santize_rec';//display salary file upload form
$route['spg/report/sanitize']	= 'spg/Spg/genrate_santize_rec';//display salary file upload form
$route['spg/report/sanitize/genrate']	= 'spg/Spg/sanitize_process';//display salary file upload form
