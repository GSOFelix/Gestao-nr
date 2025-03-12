<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(230, 230, 230);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color:rgb(172, 162, 21);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: rgb(172, 162, 21);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: rgb(126, 118, 14);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Cadastro de Funcionário</h1>
        <form action="<?php echo site_url('funcionarios/update'); ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $funcionarios->id;?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $funcionarios->nome;?>" required>

            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" value="<?php echo $funcionarios->cargo;?>" required>

            <label for="setor">Setor:</label>
            <input type="text" id="setor" name="setor" value="<?php echo $funcionarios->setor;?>" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="<?php echo $funcionarios->cpf;?>" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo $funcionarios->email;?>" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?php echo $funcionarios->telefone;?>" required>

            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $funcionarios->tipo;?>" required>

            <button type="submit">Salvar Edição</button>
        </form>
    </div>
</body>
</html>
