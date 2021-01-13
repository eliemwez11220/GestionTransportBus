<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['default_controller'] = 'authenticate';
$route['default_controller'] = 'authenticate';
//$route['(:any)'] = 'pages/view/$1';
//
$route['404_override'] = 'errors/error404';
$route['translate_uri_dashes'] = FALSE;