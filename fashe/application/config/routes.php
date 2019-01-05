<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/login';

$route['products'] = 'products/index';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

$route['pages/(:any)'] = 'pages/slider/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
