<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authorize_controller extends CI_Controller{
    public function __construct() {
       parent::__construct();
       $this->verificarAcesso();
    }


    private function verificarAcesso(){

        if(!isset($_SESSION['email'])){
            redirect('auth');
        }

        $acessoRequirido = $this->definirNivelAcesso();

        if($acessoRequirido && $_SESSION['tipo'] !== $acessoRequirido){
            $conteudo = $this->load->view('acessoNegado', '', true);
            $this->load->view('menu', ['conteudo' => $conteudo]);
        }
    }


    protected function definirNivelAcesso(){
        return null;
    }
}
