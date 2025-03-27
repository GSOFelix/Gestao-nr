<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authorize extends CI_Controller{
    public function __construct() {
       parent::__construct();

       $this->verificarAcesso();
    }


    private function verificarAcesso(){
        // VERIFICA SE HÁ UM EMAIL REGISTRADO NA SESSÃO
        if(!isset($_SESSION['email'])){
            redirect('auth');
        }
        
        // RECUPERA O NIVEL DE ACESSO DETERMINADO NA CONTROLLER
        $acessoRequirido = $this->definirNivelAcesso();

        //VERIFICA SE O USUARIO TEM O NIVEL DE ACESSO NECESSÁRIO
        if($acessoRequirido && $_SESSION['tipo'] !== $acessoRequirido){
            $data['message'] = "Você não tem permissão para acessar esta página.";
            // RETRONE PARA APAGINA QUE VEIO
            $this->session->set_flashdata("error","Você não tem permissão para acessar esta página");
            redirect('perfil');
        }
    }

    //Carrega template 
    public function template($view , $data=[]){
        $this->load->view('menu');
        $this->load->view($view,$data);
        $this->load->view('footer');
    }

    // FUNCAO EXCLUSVA DA CLASSE BASE
    protected function definirNivelAcesso(){
        return null;
    }
}
