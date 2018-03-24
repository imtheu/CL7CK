<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['app'] = 'app';
$route['app/goal/(:any)'] = 'goals/open/$1';
$route['app/goals/(:any)'] = 'goals/$1';
$route['app/(:any)'] = 'app/$1';
$route['(:any)'] = 'pages/$1';
$route['account/(:any)'] = 'account/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
