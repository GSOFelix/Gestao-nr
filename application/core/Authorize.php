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
            $data['message'] = "Você não tem permissão para acessar esta página."
            $conteudo = $this->load->view('acessoNegado', $data, true);
            $this->load->view('menu', ['conteudo' => $conteudo]);
        }
    }

    // FUNCAO EXCLUSVA DA CLASSE BASE
    protected function definirNivelAcesso(){
        return null;
    }
}
