<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Funcionarios_controller extends CI_Controller
{

    public function index()
    {
        $data['funcionarios'] = $this->Funcionario_model->get_all();
        $this->load->view('funcionario/index', $data);
    }

    public function create()
    {
        return $this->load->view('funcionario/criar');
    }
}
