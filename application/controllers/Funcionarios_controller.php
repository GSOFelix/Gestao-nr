<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/Authorize_controller.php');

class Funcionarios_controller extends Authorize_controller
{
    protected function definirNivelAcesso()
    {
        return 'gestor';
    }

    public function index()
    {
        $data['funcionarios'] = $this->funcionario->get_all();
        
        $conteudo = $this->load->view('funcionario/index', $data,true);

        $this->load->view('menu',['conteudo' => $conteudo]);
    }

    /*public function create()
    {

        return $this->load->view('funcionario/criar');
    }*/

    public function insert()
    {
        $novoFuncionario = $this->input->post();

        $novoFuncionario['senha'] = password_hash($novoFuncionario['senha'],PASSWORD_DEFAULT);

        $this->funcionario->insert($novoFuncionario);

        redirect('funcionarios');
    }

    public function edit()
    {
        $funcionarioId = $this->input->get('id');

        $data['funcionarios'] = $this->funcionario->get_by_id($funcionarioId);

        if(!$data['funcionarios']){
            show_404(); 
        }

        $conteudo = $this->load->view('funcionario/editar',$data,true);

        $this->load->view('menu',['conteudo' => $conteudo]);
    }

    public function update()
    {
       $id = $this->input->post('id');

       $data = $this->input->post(
        array('nome', 'cargo', 'setor', 'cpf', 'email', 'telefone', 'tipo'));

       $this->funcionario->update($id,$data);
        
        redirect('funcionarios');
    }

    public function delete()
    {
        $id = $this->input->post('id');
        
        $data['funcionario'] = $this->funcionario->get_by_id($id);

        if(!$data['funcionario']){
            show_404(); 
        }

        $this->funcionario->delete($id);

        redirect('funcionarios');
    }


}
