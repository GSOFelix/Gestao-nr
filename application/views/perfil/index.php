<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background:rgb(12, 34, 56);
            color: white;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .profile-container {
            padding: 40px;
            text-align: center;
            width: 80%;
            max-width: 600px;
            align-items: center;
        }

        .profile-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .profile-header h4 {
            font-size: 2rem;
            margin-left: 20px;
        }

        .profile-header i {
            font-size: 4rem;
        }

        .profile-card {
            background: #1d2671;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .profile-card p {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .welcome-message {
            font-size: 1.2rem;
            padding: 15px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            color: #fff;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="d-flex justify-content-center  w-100 h-100">
        <div class="profile-container">
            <!-- Cabeçalho com ícone grande ao lado do nome -->
            <div class="profile-header">
                <i class="bi bi-person-circle"></i>
                <h4><?= $usuario['nome']; ?></h4>
            </div>
            
            <!-- Dados dentro do card elevado -->
            <div class="profile-card">
                <p><i class="bi bi-envelope"></i> Email: <?= $usuario['email']; ?></p>
                <p><i class="bi bi-briefcase"></i> Cargo: <?= $usuario['cargo']; ?></p>
                <p><i class="bi bi-building"></i> Setor: <?= $usuario['setor']; ?></p>
                <p><i class="bi bi-telephone"></i> Telefone: <?= $usuario['telefone']; ?></p>
            </div>

            <!-- Mensagem de boas-vindas -->
            <div class="welcome-message">
                <i class="bi bi-chat-dots-fill"></i> Olá, <?= explode(' ',$usuario['nome'])[0]; ?> Seja bem-vindo!
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
