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
            background-color: #000; /* fundo preto */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction:column;
        }

        .titulo-container{
            margin-top: -100px; 
            margin-bottom:60px;

        }
        /* Estilo para o container de login */
        .login-container {
            background-color: rgba(255, 255, 255, 0.1); /* Fundo transparente com opacidade */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra para criar o efeito elevado */
            width: 100%;
            max-width: 400px;
        }

        /* Estilo para os inputs */
        .form-control {
            background-color: rgba(255, 255, 255, 0.3); /* Input com fundo transparente */
            border: 1px solid rgba(255, 255, 255, 0.5); /* Borda sutil */
            color: #fff; /* Cor do texto do input */
        }

        /* Estilo do botão */
        .btn-login {
            background-color: #007bff;
            color: white;
            width: 100%;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .text-light {
            color: white;
        }
    </style>
</head>
<body>

    <div class="titulo-container">
        <h1 class= "text-light">Gestão de Treinamentos de Segurança</h1>
    </div>

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

    

</body>
</html>
