<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_controller extends CI_Controller{

    public function index(){

        if(!isset($_SESSION['email'])){
            redirect('auth');
        }
        
        $conteudo = $this->load->view('welcome_message','',true); 

        $this->load->view('menu', ['conteudo' => $conteudo]);
    }

    public function logout(){
        $this->session->sess_destroy(); // Remove todos os dados da sessão
        redirect('auth');
    }
}