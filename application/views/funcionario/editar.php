<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Funcionário</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #e6e6e6;
      font-family: Arial, sans-serif;
    }

    .container {
      background-color: #212529;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      max-width: 100%;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      color: #ffc107;
      margin-bottom: 30px;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
      color: white;
    }

    input,
    select {
      width: 100%;
      padding: 12px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #495057;
      border-radius: 8px;
      background-color: #343a40;
      color: white;
    }

    button {
      width: 100%;
      background-color: #ffc107;
      color: black;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #e0a800;
    }

    .btn-back {
      background-color: #6c757d;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
      margin-bottom: 20px;
    }

    .btn-back:hover {
      background-color: #5a6268;
    }

    .form-row {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .form-column {
      flex: 1;
    }

    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
      }

      .form-column {
        margin-bottom: 15px;
      }

      button {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>

  <div class="container">
    <a href="<?= site_url('funcionarios'); ?>" class="btn-back">
      <i class="bi bi-arrow-left"></i> Voltar
    </a>

    <h1>Editar Cadastro de Funcionário</h1>
    
    <form method="POST">
      <input type="hidden" name="id" value="<?= $funcionarios->id; ?>">

      <div class="form-row">
        <div class="form-column">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" value="<?= $funcionarios->nome; ?>" required>
        </div>

        <div class="form-column">
          <label for="cargo">Cargo:</label>
          <input type="text" id="cargo" name="cargo" value="<?= $funcionarios->cargo; ?>" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-column">
          <label for="setor">Setor:</label>
          <input type="text" id="setor" name="setor" value="<?= $funcionarios->setor; ?>" required>
        </div>

        <div class="form-column">
          <label for="cpf">CPF:</label>
          <input type="text" id="cpf" name="cpf" value="<?= $funcionarios->cpf; ?>" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-column">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" value="<?= $funcionarios->email; ?>" required>
        </div>

        <div class="form-column">
          <label for="telefone">Telefone:</label>
          <input type="text" id="telefone" name="telefone" value="<?= $funcionarios->telefone; ?>" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-column">
          <label for="tipo">Tipo:</label>
          <select id="tipo" name="tipo" required>
            <option value="comum" <?= ($funcionarios->tipo == 'comum') ? 'selected' : ''; ?>>Comum</option>
            <option value="gestor" <?= ($funcionarios->tipo == 'gestor') ? 'selected' : ''; ?>>Gestor</option>
          </select>
        </div>
      </div>

      <button type="submit">Salvar Edição</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
