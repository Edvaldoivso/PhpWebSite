<?php
// Configurações de acesso
$host     = '127.0.0.1:3306';
$user     = 'u271751155_0Yxgm';
$password = 'Defi1000';
$dbname   = 'u271751155_jtlDo';

// Cria conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Não podemos encontrar o que procura!: " . $conn->connect_error);
}


$conn->set_charset("utf8");

?>
