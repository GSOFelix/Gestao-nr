<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Minha Escola</title>
  <!-- CSS do Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    .sidebar {
      min-height: 100vh;
    }

    a:hover{
      background-color:gray;
    }
  </style>
</head>
<body>
  <!-- Navbar Superior -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo site_url('menu'); ?>">Minha Escola</a>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <!-- Barra Lateral -->
      <nav class="col-12 col-md-2 bg-dark sidebar">
        <ul class="nav flex-column text-white p-3">
          <li class="nav-item mb-2">
            <a class="nav-link text-white" href="<?php echo site_url('welcome'); ?>">
              <i class="bi bi-house-door-fill"></i> Home
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white" href="<?php echo site_url('funcionarios'); ?>">
              <i class="bi bi-people-fill"></i> Funcionários
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white" href="<?php echo site_url('treinamentos'); ?>">
              <i class="bi bi-book-fill"></i> Treinamentos
            </a>
          </li>

          <li class="nav-item mb-2">
            <a class="nav-link text-white" href="<?php echo site_url('logout'); ?>">
              <i class="bi bi-door-open"></i> Sair
            </a>
          </li>
        </ul>
      </nav>

      <!-- Conteúdo Central -->
      <main class="col-12 col-md-10 p-4">
        <?php echo $conteudo; ?>
      </main>
    </div>
  </div>

 
</body>
</html>
