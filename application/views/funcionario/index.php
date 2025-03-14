<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Funcionários</title>
</head>

<body>
  <!-- Seção Funcionários -->
  <div id="funcionarios" class="conteudo">
    <h1>Funcionários</h1>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalFuncionario">
      <i class="bi bi-plus-circle"></i> Adicionar Funcionário
    </button>

    <!-- Tabela de Funcionários (exemplo) -->
    <table class="table table-dark table-hover">
      <thead>
        <tr>
            <th>Nome</th>
            <th>Setor</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Cargo</th>
            <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($funcionarios as $funcionario): ?>
        <tr>
          <td><?= $funcionario->nome; ?></td>
          <td><?= $funcionario->setor; ?></td>
          <td><?= $funcionario->email; ?></td>
          <td><?= $funcionario->telefone; ?></td>
          <td><?= $funcionario->cargo; ?></td>
          <td>
            <a class="btn btn-warning btn-sm" href="<?= site_url('funcionarios/edit/'.$funcionario->id); ?>">
              <i class="bi bi-pencil"></i> Editar
            </a>
            <a  class="btn btn-danger btn-sm" href="<?php echo site_url('funcionarios/delete/'.$funcionario->id); ?>" >
              <i class="bi bi-trash"></i> Deletar
            </a>
          </td>
        </tr>
        
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Modal de Adicionar Funcionário -->
    <div class="modal fade" id="modalFuncionario" tabindex="-1" aria-labelledby="modalFuncionarioLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
          <div class="modal-header">
            <h5 class="modal-title" id="modalFuncionarioLabel">
              Adicionar Funcionário
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= site_url('funcionarios/insert'); ?>" method="POST">

              <div class="mb-3">
                <label for="nomeFuncionario" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required />
              </div>
              <div class="mb-3">
                <label for="cargoFuncionario" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required />
              </div>

              <div class="mb-3">
                <label for="setorFuncionario" class="form-label">Setor</label>
                <input type="text" class="form-control" id="setor" name="setor" required />
              </div>

              <div class="mb-3">
                <label for="cpfFuncionario" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required />
              </div>

              <div class="mb-3">
                <label for="emailFuncionario" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" required />
              </div>

              <div class="mb-3">
                <label for="telefoneFuncionario" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required />
              </div>

              <div class="mb-3">
                <label for="senhaFuncionario" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required />
              </div>

              <div class="mb-3">
                <label for="tipo" class="form-label">Tipo de Usuário</label>
                <select id="tipo" name="tipo" class="form-select" required>
                  <option value="comum">Comum</option>
                  <option value="gestor">Gestor</option>
                </select>
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
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>