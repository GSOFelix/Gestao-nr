<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_controller extends CI_Controller
{

   public function index(){
      $this->load->view('login');
   }

   public function Login(){


      $usuario = $this->input->post(); 
      
      $usuarioRetornado = $this->auth->get_funcionario_by_email($usuario['email']);

      if(!$usuarioRetornado){
         $this->session->set_flashdata('message', 'Usuario não encontrado!');
         redirect('auth');
      }

      if(password_verify($usuario['senha'], $usuarioRetornado->senha)){
         
         $dados_session =  array(
            'id' => $usuarioRetornado->id,
            'email'=> $usuarioRetornado->email,
            'tipo' => $usuarioRetornado->tipo,
            'nome' => $usuarioRetornado->nome,
            'setor' => $usuarioRetornado->setor,
            'cargo'=> $usuarioRetornado->cargo,
            'telefone'=>$usuarioRetornado->telefone
         );

         $this->session->set_userdata($dados_session);

         redirect('perfil');


      }else {
         $this->session->set_flashdata('message', 'E-mail ou senha incorretos!');
         redirect('auth');
      }
   }

   public function logout(){
      $this->session->sess_destroy();
      redirect('auth');
  }
}
