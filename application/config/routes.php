<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Auth_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Ao digitar a url com /funcionarios ele invoca a controller com o método index
$route['funcionarios'] = 'Funcionarios_controller/index';
$route['funcionarios/create'] = 'Funcionarios_controller/create';
$route['funcionarios/insert'] = 'Funcionarios_controller/insert';
$route['funcionarios/update'] = 'Funcionarios_controller/update';
$route['funcionarios/edit/(:num)'] = 'Funcionarios_controller/edit/$1';
$route['funcionarios/delete/(:num)'] = 'Funcionarios_controller/delete/$1';
$route['menu'] = 'Menu_controller/index';
$route['auth'] = 'Auth_controller';
$route['auth/login'] = 'Auth_controller/login';

