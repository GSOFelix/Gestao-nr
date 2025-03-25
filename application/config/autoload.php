<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

// Carrega as bibliotecas
$autoload['libraries'] = array('database','session','user_agent');


$autoload['drivers'] = array();


$autoload['helper'] = array('url');


$autoload['config'] = array();


$autoload['language'] = array();

// Carrega as Models
$autoload['model'] = array('Funcionario_model' => 'funcionario','Auth_model'=>'auth');
