<?php
$post = "circleMenuAtivo";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Cadastro de Postagem</title>
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/cadastroPost.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">


</head>

<body>

  <div class="form-container">
    <h2>Nova Postagem</h2>
    <form action="./db/novoTexto.php" method="POST">

      <label for="titulo">Título:</label>
      <input type="text" id="titulo" name="titulo" required>

      <label for="autor">Autor:</label>
      <input type="text" id="autor" name="autor" required>

      <label for="status">Status da Publicação:</label>
      <select id="status" name="status" required>
        <option value="A">Ativo</option>
        <option value="I">Inativo</option>
      </select>

      <label for="corpo">Corpo do Texto:</label>
      <textarea id="corpo" name="corpo" rows="6" required></textarea>

      <div class="buttonAction">
        <button type="submit">Salvar</button>
        <a href="https://erotecnologia.com/" class="btn btn-logoff">
          Logoff
        </a>
      </div>
    </form>
  </div>
</body>

</html>