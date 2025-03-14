<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Funcionário</title>
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
            color:rgb(61, 111, 177);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input,select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: rgb(61, 111, 177);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: rgb(43, 96, 165);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Novo Funcionário</h1>
        <form action="<?php echo site_url('funcionarios/insert'); ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>

            <label for="setor">Setor:</label>
            <input type="text" id="setor" name="setor" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="tipo">Tipo:</label>
            
            <select id="tipo" name="tipo" required>
                <option value="comum">Comum</option>
                <option value="gestor">Gestor</option>  
            </select>

            <button type="submit">Salvar Funcionário</button>
        </form>
    </div>
</body>
</html>
