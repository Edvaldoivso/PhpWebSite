<?php
session_start();
include_once './conexao.php';


$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Validação básica
if (empty($email) || empty($senha)) {
  echo "Preencha todos os campos.";
  exit;
}

// Consulta ao banco com segurança
$stmt = $conn->prepare("SELECT * FROM pessoas WHERE emailPessoa = ? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows === 1) {
  $usuario = $result->fetch_assoc();

  if ($usuario['senhaPessoa']) {
    $_SESSION['usuario'] = $usuario['nomePessoa'];
    header("Location: ../criarPost.php");
    exit;
  } else {

    $_SESSION['usuario'] = $usuario['nomePessoa'];
    echo  $_SESSION['usuario'];
    echo "Senha incorreta.";
    header("Location: index.php");
    exit;
  }
} else {
  echo "Email não encontrado.";
}

$stmt->close();
$conn->close();
