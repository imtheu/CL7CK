<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['(:any)'] = 'pages/$1';
// $route['about'] = 'pages/about';
// $route['signup'] = 'account/createAccount';
$route['account/(:any)'] = 'account/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
