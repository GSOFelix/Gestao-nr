<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_controller extends CI_Controller {
    public function index(){
        
        if(!isset($_SESSION['email'])){
            redirect('auth');
        }

        $data['usuario'] = $this->session->userdata();
        
        $this->load->view('menu');
        $this->load->view('perfil/index',$data);
        $this->load->view('footer');

    }
}