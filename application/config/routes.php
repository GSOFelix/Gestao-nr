<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Auth_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['welcome'] = 'Welcome';

// ROTAS DE FUNCIONARIOS
$route['funcionarios']['GET'] = 'Funcionarios_controller/index';
$route['funcionarios/insert'] = 'Funcionarios_controller/insert';
$route['funcionarios/edit']['POST'] = 'Funcionarios_controller/update';
$route['funcionarios/edit']['GET'] = 'Funcionarios_controller/edit';
$route['funcionarios/delete'] = 'Funcionarios_controller/delete';

// ROTA DO MENU
$route['menu'] = 'Menu_controller/index';

// ROTAS DE AUTENTICAÇÃO
$route['auth'] = 'Auth_controller';
$route['auth/login'] = 'Auth_controller/login';
$route['logout'] = 'Menu_controller/logout';

