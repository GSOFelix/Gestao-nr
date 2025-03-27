<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestão de Treinamentos</title>
  <!-- CSS do Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    html, body {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .footer {
      background-color: #212529;
      color: white;
      text-align: center;
      padding: 10px 0;
    }

    .content {
      flex: 1;
    }
    .sidebar {
      min-height: 100vh;
    }

    a:hover {
      background-color: gray;
    }

    /* Esconder o sidebar em dispositivos menores */
    @media (max-width: 767px) {
      .sidebar {
        display: none;
      }

      .navbar-toggler {
        display: block;
      }
    }

    /* Para tela grande, mostrar sidebar */
    @media (min-width: 991px) {
      .sidebar {
        display: block;
      }

      .navbar-toggler {
        display: none;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar Superior -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="<?=base_url('perfil'); ?>">
        <i class="bi bi-person"></i> Perfil
      </a>
      <!-- Botão de Menu para dispositivos menores -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?=base_url('funcionarios'); ?>">
              <i class="bi bi-people-fill"></i> Funcionários
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?=base_url('logout'); ?>">
              <i class="bi bi-door-open"></i> Sair
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Conteúdo principal -->
  <div class="content">


  <!-- Scripts do Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
