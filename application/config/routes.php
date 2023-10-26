<?php
defined('BASEPATH') or exit('No direct script access allowed');

/****************************************
 * Admin Panel Routes
 ***************************************/
$route['admin'] = 'AdminController/index';
$route['admin/blogs'] = 'AdminController/blogs';
$route['admin/create-blogs'] = 'AdminController/create_blogs';
$route['admin/revise-blog/(:num)'] = 'AdminController/revise_blog/$1';


/****************************************
 * Front End Website Routes
 ***************************************/
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)'] = 'HomeController/pages/$1';

