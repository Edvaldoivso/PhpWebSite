<?php
include_once './db/conexao.php';

$resultadoCards = $conn->query("SELECT * FROM wp_postTI WHERE statusPost = 'A' ORDER BY dataCriacao ASC LIMIT 10;");



// print_r($resultadoCards);

return $resultadoCards;

$stmt->close();
$conn->close();
