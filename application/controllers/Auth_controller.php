<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_controller extends CI_Controller
{
    public function index(){
        $this->load->view('login');
    }

    public function Login(){
       $usuario = $this->input->post(); 
      
       $usuarioRetornado = $this->Auth_model->get_funcionario_by_email($usuario['email']);

       if(!$usuarioRetornado){
          show_404();
       }

       if(password_verify($usuario['senha'], $usuarioRetornado->senha)){
          redirect('menu');
       }else {
          redirect('auth');
       }
    }
}
