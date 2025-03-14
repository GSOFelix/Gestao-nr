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
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 50px auto;
      color: white;
    }

    h1 {
      text-align: center;
      color: #ffc107;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #495057;
      border-radius: 5px;
      background-color: #343a40;
      color: white;
    }

    button {
      width: 100%;
      background-color: #ffc107;
      color: black;
      padding: 12px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #e0a800;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Editar Cadastro de Funcionário</h1>
    <form action="<?= site_url('funcionarios/update'); ?>" method="POST">
      <input type="hidden" name="id" value="<?= $funcionarios->id; ?>">

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?= $funcionarios->nome; ?>" required>

      <label for="cargo">Cargo:</label>
      <input type="text" id="cargo" name="cargo" value="<?= $funcionarios->cargo; ?>" required>

      <label for="setor">Setor:</label>
      <input type="text" id="setor" name="setor" value="<?= $funcionarios->setor; ?>" required>

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" value="<?= $funcionarios->cpf; ?>" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" value="<?= $funcionarios->email; ?>" required>

      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" value="<?= $funcionarios->telefone; ?>" required>

      <label for="tipo">Tipo:</label>
      <select id="tipo" name="tipo" required>
        <option value="comum" <?= ($funcionarios->tipo == 'comum') ? 'selected' : ''; ?>>Comum</option>
        <option value="gestor" <?= ($funcionarios->tipo == 'gestor') ? 'selected' : ''; ?>>Gestor</option>
      </select>

      <button type="submit">Salvar Edição</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
