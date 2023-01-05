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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//ADMIN
$route['Admin'] = "Admin/login";
$route['Dashboard'] = "Admin/index";
$route['getBlogs'] = "Admin/getBlogs";
$route['EditBlogs'] = "Admin/EditBlogs";
$route['getBlogsDetails'] = "Admin/getBlogsDetails";
$route['deleteBlog'] = "Admin/deleteBlog";
$route['ChangePassword'] = "Admin/ChangePassword";
$route['updatePassword'] = "Admin/updatePassword";
$route['checkLogin'] = "Admin/checkLogin";
$route['getContactUSData'] = "Admin/getContactUSData";
$route['contact_us'] = "Admin/contact_us";
$route['getUserData'] = "Admin/getUserData";
$route['users'] = "Admin/users";


//USERS
$route['Discover'] = "Welcome/Discover";
$route['Latest'] = "Welcome/Latest";
$route['Popular'] = "Welcome/Popular";
$route['AboutUs'] = "Welcome/AboutUs";
$route['Blogs/(:any)'] = "Welcome/Blogs/$1";
$route['getData'] = "Welcome/getData";
$route['Login'] = "Welcome/Login";
$route['Register'] = "Welcome/Register";
$route['DiscoveryBlogs/(:any)'] = "Welcome/DiscoveryBlogs/$1";
$route['getDiscoveryBlogs'] = "Welcome/getDiscoveryBlogs";
$route['checkUserLogin'] = "Welcome/checkUserLogin";
$route['changeStatus'] = "Welcome/changeStatus";
$route['RegisterUser'] = "Welcome/RegisterUser";
$route['logout'] = "Welcome/logout";
$route['AddContactUs'] = "Welcome/AddContactUs";



