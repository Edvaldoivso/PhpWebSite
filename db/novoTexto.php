<?php
include_once './conexao.php';

// Recebe dados do formulário
$titulo = $_POST['titulo'] ?? '';
$autor  = $_POST['autor'] ?? '';
$status = $_POST['status'] ?? '';
$texto  = $_POST['corpo'] ?? '';

// Gera datas
$dataCriacao     = date('Y-m-d H:i:s');
$dataModificacao = date('Y-m-d H:i:s');

// Validação simples
if (empty($titulo) || empty($autor) || empty($texto)) {
  echo "Todos os campos obrigatórios devem ser preenchidos.";
  exit;
}

// Prepara e executa o INSERT
$stmt = $conn->prepare("INSERT INTO wp_postTI (textoPost, tituloPost, dataCriacao, dataModificacao, nomeAutor, statusPost) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $texto, $titulo, $dataCriacao, $dataModificacao, $autor, $status);

if ($stmt->execute()) {
  header("Location: ../index.php");
} else {
  echo "<p style='color: red;'>Erro ao salvar post: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
