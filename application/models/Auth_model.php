<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
    public function get_funcionario_by_email($email){

        $query = $this->db->get_where('funcionarios',['email'=> $email]);
        return $query->row();
    }
}