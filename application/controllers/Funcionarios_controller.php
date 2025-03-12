<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Funcionarios_controller extends CI_Controller
{

    public function index()
    {
        $data['funcionarios'] = $this->Funcionario_model->get_all();
        $this->load->view('funcionario/index', $data);
    }

    public function create()
    {
        return $this->load->view('funcionario/criar');
    }

    public function insert()
    {
        $nome = $this->input->post('nome');
        $cargo = $this->input->post('cargo');
        $setor = $this->input->post('setor');
        $cpf = $this->input->post('cpf');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $senha = $this->input->post('senha');
        $tipo = $this->input->post('tipo');

        $data = array(
            'nome'=>$nome,
            'cargo' => $cargo,
            'setor' => $setor,
            'cpf' => $cpf,
            'email' => $email,
            'telefone' => $telefone,
            'senha' => password_hash($senha, PASSWORD_DEFAULT),
            'tipo'=> $tipo
        );

        $this->Funcionario_model->insert($data);

        redirect('funcionarios');
    }

    public function edit($id)
    {
        $data['funcionarios'] = $this->Funcionario_model->get_by_id($id);

        if(!$data['funcionarios']){
            show_404(); 
        }

        $this->load->view('funcionario/editar',$data);
    }

    public function update(){
        $id = $this->input->post('id');
        $nome = $this->input->post('nome');
        $cargo = $this->input->post('cargo');
        $setor = $this->input->post('setor');
        $cpf = $this->input->post('cpf');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $tipo = $this->input->post('tipo');

        
        $data = array(
            'nome' => $nome,
            'cargo' => $cargo,
            'setor' => $setor,
            'cpf' => $cpf,
            'email' => $email,
            'telefone' => $telefone,
            'tipo' => $tipo
        );

        $this->Funcionario_model->update($id,$data);
        
        redirect('funcionarios');
    }

    public function delete($id)
    {
        $data['funcionario'] = $this->Funcionario_model->get_by_id($id);

        if(!$data['funcionario']){
            show_404(); 
        }

        $this->Funcionario_model->delete($id);

        redirect('funcionarios');
    }


}
