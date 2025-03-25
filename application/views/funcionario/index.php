<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Funcionários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .conteudo {
      padding: 1rem;
    }

    @media (max-width: 768px) {

      .table th,
      .table td {
        padding: 0.5rem;
        font-size: 0.875rem;
        /* Reduz o tamanho da fonte */
      }

      .table-responsive {
        overflow-x: auto;
      }

      .d-none-mobile {
        display: none;
        /* Oculta colunas em telas pequenas */
      }
    }

    .btn-actions {
      display: flex;
      flex-direction: row;
      gap: 0.5rem;
      /* Espaço entre os botões */
    }

    @media (max-width: 605px) {
      .btn-actions {
        flex-direction: column;
        /* Coloca os botões um abaixo do outro */
      }

      .btn-actions .btn {
        width: 100%;
        /* Faz os botões terem a mesma largura */
      }
    }

    .modalEdit{
      text-align: center;
      color: #ffc107;
    }
    .mdLabel{
      font-weight: bold;
      margin-top: 10px;
      color: white;
    }

    
  </style>
</head>

<body>

  <div id="funcionarios" class="conteudo">
    <h1>Funcionários</h1>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalFuncionario">
      <i class="bi bi-plus-circle"></i> Adicionar Funcionário
    </button>

    <div class="table-responsive">
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Nome</th>
            <th class="d-none-mobile">Setor</th>
            <th>Email</th>
            <th class="d-none-mobile">Telefone</th>
            <th>Cargo</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($funcionarios as $funcionario): ?>
          <tr>
            <td>
              <?= $funcionario->nome; ?>
            </td>
            <td class="d-none-mobile">
              <?= $funcionario->setor; ?>
            </td>
            <td>
              <?= $funcionario->email; ?>
            </td>
            <td class="d-none-mobile">
              <?= $funcionario->telefone; ?>
            </td>
            <td>
              <?= $funcionario->cargo; ?>
            </td>
            <td>
              <div class="btn-actions">
                <a class="btn btn-warning btn-sm" 
                data-bs-toggle="modal" 
                data-id="<?= $funcionario->id; ?>"
                data-nome="<?= $funcionario->nome; ?>"
                data-cargo="<?= $funcionario->cargo; ?>"
                data-setor="<?= $funcionario->setor; ?>"
                data-cpf="<?= $funcionario->cpf; ?>"
                data-telefone="<?= $funcionario->telefone; ?>"
                data-email="<?= $funcionario->email ?>"
                data-tipo="<?= $funcionario->tipo; ?>"
                data-bs-target="#modalFuncionarioEditar">
                  <i class="bi bi-pencil"></i> Editar
                </a>

                <form action="<?= 'funcionarios/delete' ?>" method="POST">
                  <input type="hidden" name="id" value="<?= $funcionario->id ?>">
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i> Deletar
                  </button>
                </form>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Modal de Adicionar Funcionário -->
    <div class="modal fade" id="modalFuncionario" tabindex="-1" aria-labelledby="modalFuncionarioLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
          <div class="modal-header">
            <h5 class="modal-title " id="modalFuncionarioLabel">
              Adicionar Funcionário
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="<?='funcionarios/insert'; ?>" method="POST">

              <!-- Primeira linha: Nome e Cargo -->
              <div class="row">
                <div class="col-md-6">
                  <label for="nomeFuncionario" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" required />
                </div>
                <div class="col-md-6">
                  <label for="cargoFuncionario" class="form-label">Cargo</label>
                  <input type="text" class="form-control" id="cargo" name="cargo" required />
                </div>
              </div>

              <!-- Segunda linha: Setor e CPF -->
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="setorFuncionario" class="form-label">Setor</label>
                  <input type="text" class="form-control" id="setor" name="setor" required />
                </div>
                <div class="col-md-6">
                  <label for="cpfFuncionario" class="form-label">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" required />
                </div>
              </div>

              <!-- Terceira linha: E-mail e Telefone -->
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="emailFuncionario" class="form-label">E-mail</label>
                  <input type="text" class="form-control" id="email" name="email" required />
                </div>
                <div class="col-md-6">
                  <label for="telefoneFuncionario" class="form-label">Telefone</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" required />
                </div>
              </div>

              <!-- Quarta linha: Senha e Tipo de Usuário -->
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="senhaFuncionario" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" required />
                </div>

                <div class="col-md-6 pb-2">
                  <label for="tipo" class="form-label">Tipo de Usuário</label>
                  <select id="tipo" name="tipo" class="form-select" required>
                    <option value="comum">Comum</option>
                    <option value="gestor">Gestor</option>
                  </select>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancelar
                </button>
  
                <button type="submit" class="btn btn-primary">
                  Salvar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


      <!-- Modal de Editar Funcionário -->  
    <div class="modal fade" id="modalFuncionarioEditar" tabindex="-1" aria-labelledby="modalFuncionarioEditarLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
          <div class="modal-header">
            <h5 class="modal-title modalEdit" id="modalFuncionarioEditarLabel">Editar Funcionário</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
    
            <form action="<?='funcionarios/update'; ?>" method="POST">

              <input type="hidden" name="id" id="edit-id" value="<?= $funcionario->id; ?>" >

              <!-- Primeira linha: Nome e Cargo -->
              <div class="row">
                <div class="col-md-6">
                  <label for="nomeFuncionario" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="edit-nome" name="nome"  required />
                </div>
                <div class="col-md-6">
                  <label for="cargoFuncionario" class="form-label">Cargo</label>
                  <input type="text" class="form-control" id="edit-cargo" name="cargo" required />
                </div>
              </div>

              <!-- Segunda linha: Setor e CPF -->
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="setorFuncionario" class="form-label">Setor</label>
                  <input type="text" class="form-control" id="edit-setor" name="setor"  required />
                </div>
                <div class="col-md-6">
                  <label for="cpfFuncionario" class="form-label">CPF</label>
                  <input type="text" class="form-control" id="edit-cpf" name="cpf"  required />
                </div>
              </div>

              <!-- Terceira linha: E-mail e Telefone -->
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="emailFuncionario" class="form-label">E-mail</label>
                  <input type="text" class="form-control" id="edit-email" name="email"  required />
                </div>
                <div class="col-md-6">
                  <label for="telefoneFuncionario" class="form-label">Telefone</label>
                  <input type="text" class="form-control" id="edit-telefone" name="telefone" />
                </div>
              </div>


                <div class="col-md-6 pb-2">
                  <label for="tipo" class="form-label">Tipo de Usuário</label>
                  <select id="edit-tipo" name="tipo" class="form-select" required>
                  <option value="comum">Comum</option>
                  <option value="gestor">Gestor</option>
                  </select>
                </div>
              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar Edição</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    

  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });

    
    <?php if ($this -> session -> flashdata('success_message')): ?>
      Toast.fire({
        icon: "success",
        title: "<?= $this->session->flashdata('success_message'); ?>"
      });
    <?php endif; ?>


    <?php if ($this -> session -> flashdata('error')): ?>

      Toast.fire({
        icon: "error",
        title: "<?= $this->session->flashdata('error'); ?>",
      });
      
    <?php endif; ?>

    document.addEventListener("DOMContentLoaded", function() {
    let modalFuncionarioEditar = document.getElementById("modalFuncionarioEditar");

    modalFuncionarioEditar.addEventListener("show.bs.modal", function(event) {
        let button = event.relatedTarget; // Botão que acionou o modal

        // Captura os atributos de data do botão
        let id = button.getAttribute("data-id");
        let nome = button.getAttribute("data-nome");
        let cargo = button.getAttribute("data-cargo");
        let setor = button.getAttribute("data-setor");
        let cpf = button.getAttribute("data-cpf");
        let telefone = button.getAttribute("data-telefone");
        let email = button.getAttribute("data-email");
        let tipo = button.getAttribute("data-tipo");

        // Preenche os campos do formulário no modal
        document.getElementById("edit-id").value = id;
        document.getElementById("edit-nome").value = nome;
        document.getElementById("edit-cargo").value = cargo;
        document.getElementById("edit-setor").value = setor;
        document.getElementById("edit-cpf").value = cpf;
        document.getElementById("edit-email").value = email;
        document.getElementById("edit-telefone").value = telefone;
        document.getElementById("edit-tipo").value = tipo;
      });
    });
  </script>

</body>

</html>