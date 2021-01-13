<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'form_validation', 'email', 'pagination', 'cart');

$autoload['drivers'] = array();

$autoload['helper'] = array('security','url', 'html', 'form', 'text', 'email', 'date', 'download', 'file');

$autoload['config'] = array('pagination');

$autoload['language'] = array();

$autoload['model'] = array();
