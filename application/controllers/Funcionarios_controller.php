<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'core/Authorize.php');

class Funcionarios_controller extends Authorize
{
    protected function definirNivelAcesso()
    {
        return 'gestor';
    }

    public function index()
    {
        $data['funcionarios'] = $this->funcionario->get_all();
        
        $this->template('funcionario/index',$data);
    }

    public function insert()
    {
        $novoFuncionario = $this->input->post();

        $novoFuncionario['senha'] = password_hash($novoFuncionario['senha'],PASSWORD_DEFAULT);

        $this->funcionario->insert($novoFuncionario);

        $this->session->set_flashdata('success_message', 'Funcionário cadastrado com sucesso!');

        redirect('funcionarios');
    }

    public function edit()
    {
        $funcionarioId = $this->input->get('id');

        $data['funcionarios'] = $this->funcionario->get_by_id($funcionarioId);

        if(!$data['funcionarios']){
            show_404(); 
        }

        $this->session->set_flashdata("funcionario",$data);
    }

    public function update()
    {
        $id = $this->input->post('id');
    
        $data = $this->input->post(
        array('nome', 'cargo', 'setor', 'cpf', 'email', 'telefone', 'tipo'));
        $this->funcionario->update($id,$data);
        $this->session->set_flashdata("success_message","Usuário editado com sucesso!");
        redirect('funcionarios');
    }

    public function delete()
    {
        $id = $this->input->post('id');
        
        $data['funcionario'] = $this->funcionario->get_by_id($id);
        
        if(!$data['funcionario']){
            show_404(); 
        }
        
        if($data['funcionario']->id == $_SESSION['id']){
            $this->session->set_flashdata("error","Você não pode excluir sua própria conta.");
            redirect('funcionarios');
        }

        $this->funcionario->delete($id);
        $this->session->set_flashdata("success_message","Usuário deletado com sucesso!");
        redirect('funcionarios');
    }
}