<!DOCTYPE html>

<?php
$login = "circleMenuAtivo";
?>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Login | Erotecnologia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Seu estilo personalizado -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Erotecnologia</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">


</head>

<body>
  <header>
    <?php include_once './components/header.php'; ?>
  </header>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="login-container">
      <h2>Faça seu Login</h2>
      <form action="./db/campainha.php" method="POST">
        <div class="mb-3 text-start">
          <label for="email" class="form-label">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3 text-start">
          <label for="senha" class="form-label">Senha:</label>
          <input type="password" id="senha" name="senha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-custom w-100">Entrar</button>
        <br>
        <br>
        <a href="https://erotecnologia.com/" class="btn btn-logoff">
          cancelar
        </a>

      </form>
    </div>
  </div>
</body>

</html>