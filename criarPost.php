<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Postagem</title>
  <link rel="stylesheet" href="./css/cadastro.css"> <!-- opcional para estilização -->
</head>
<body>
  <div class="form-container">
    <h2>Nova Postagem</h2>
    <form action="salvarPost.php" method="POST">
      
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

      <button type="submit">Salvar</button>
    </form>
  </div>
</body>
</html>
