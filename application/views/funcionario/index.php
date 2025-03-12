<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
    <style>
        body, h1, table, th, td {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f7fc;
            color: #333;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions {
            display: flex;
            justify-content: space-around;
        }

        .actions a {
            padding: 6px 12px;
            text-decoration: none;
            background-color: #2196F3;
            color: white;
            border-radius: 5px;
            margin: 0 5px;
            transition: background-color 0.3s ease;
        }

        .actions a:hover {
            background-color: #1976D2;
        }

        .actions .delete {
            background-color: #f44336;
        }

        .actions .delete:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>
    <h1>Lista de Funcionários</h1>

    <a href="<?php echo site_url('funcionarios/create'); ?>" class="button">Adicionar Novo Funcionário</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td><?php echo $funcionario->id; ?></td>
                <td><?php echo $funcionario->nome; ?></td>
                <td><?php echo $funcionario->email; ?></td>
                <td><?php echo $funcionario->cargo; ?></td>
                <td class="actions">
                    <a href="#">Editar</a>
                    <a href="#" class="delete">Deletar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
