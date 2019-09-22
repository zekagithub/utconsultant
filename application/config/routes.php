<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Front';
$route['home']="front";
$route['about']="front/about";
$route['services']="front/services";
$route['blog']="front/blog";
$route['carier']="front/carier";
$route['contact']="front/contact";
$route['blog/(:any)']="Front/blog_single/$1";
$route['home/tr']="Front/blog_single/$1";
$route['home/en']="Front/blog_single/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
