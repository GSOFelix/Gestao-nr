<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_model extends CI_Model {

    private $table = 'funcionarios';

    public function get_by_id($id) {
        $query = $this->db->get_where($this->table, ['id' => $id]); 
        return $query->row();  
    }

    public function get_all(){
        $this->db->order_by('nome','asc');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function insert($data){
       return $query = $this->db->insert($this->table,$data);
    }

    public function update($id,$data) {
        $this->db->where('id',$id);
        return $this->db->update($this->table,$data);
    }

    public function delete($id) {
        $this->db->where('id', $id);  
        return $this->db->delete($this->table);  
    }

    
}