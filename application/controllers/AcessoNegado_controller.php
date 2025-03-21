<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AcessoNegado_controller extends CI_Controller{
    public function index(){
        $data['message'] = "Você não tem permissão para acessar esta página.";
        $this->load->view('menu');
        $this->load->view('acessoNegado',$data);
    }
}