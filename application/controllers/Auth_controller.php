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
         
         $dados_session =  array(
            'id' => $usuarioRetornado->id,
            'email'=> $usuarioRetornado->email,
            'tipo' => $usuarioRetornado->tipo,
            'logged_in' => TRUE
         );

         $this->session->set_userdata($dados_session);

         redirect('menu');


      }else {
         $this->session->set_flashdata('error', 'E-mail ou senha incorretos!');
         redirect('auth');
      }
   }
}
