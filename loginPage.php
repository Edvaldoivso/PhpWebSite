<!DOCTYPE html>
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
      </form>
    </div>
  </div>
</body>

</html>