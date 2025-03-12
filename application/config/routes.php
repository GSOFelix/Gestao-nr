<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Ao digitar a url com /funcionarios ele invoca a controller com o método index
$route['funcionarios'] = 'Funcionarios_controller/index';
$route['funcionarios/create'] = 'Funcionarios_controller/create';
