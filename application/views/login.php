<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link para o Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para o fundo da página */
        body {
            background: rgb(104, 100, 100);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0;
            padding: 20px;
        }

        /* Estilo para o container de login */
        .login-container {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            margin: 20px;
        }

        /* Estilo para os inputs */
        .form-control {
            background-color: rgba(255, 255, 255, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Estilo do botão */
        .btn-login {
            background-color: #007bff;
            color: white;
            width: 100%;
            padding: 10px;
            font-size: 1.1em;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .text-light {
            color: white;
        }

        /* Estilos para o conteúdo da página */
        .container {
        padding: 20px;
        text-align: center;
        color: white;
        width: 100%;
        max-width: 800px;
        display: flex;
        flex-direction: column;
        align-items: center; /* Centraliza horizontalmente */
        }

        .content {
            background: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
            align-items: center; /* Centraliza horizontalmente */
            display: flex;
            flex-direction: column;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: 700;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        /* Ajustes para telas menores */
        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }

            p {
                font-size: 1em;
            }

            .login-container {
                padding: 20px;
            }

            .btn-login {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.5em;
            }

            p {
                font-size: 0.9em;
            }

            .login-container {
                padding: 15px;
            }

            .btn-login {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="content">
            <h1>Bem-vindo ao Sistema de Gestão de Treinamentos de Segurança</h1>
            <p>Gerencie e acompanhe os treinamentos de segurança da sua equipe com facilidade e eficiência.</p>
            <div class="login-container">
                <h2 class="text-center text-light">Login</h2>
                <form method="POST" action="<?= site_url('auth/login'); ?>">
                    <div class="form-group">
                        <label for="email" class="text-light">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="senha" class="text-light">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <button type="submit" class="btn btn-login">Entrar</button>
                    <?php if($this->session->flashdata('message')): ?>
                    <div class="alert alert-danger mt-3">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

</body>
</html>