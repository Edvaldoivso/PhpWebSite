<?php
include_once './db/conexao.php';

$resultSlides = $conn->query("SELECT * FROM wp_postTI WHERE statusPost = 'A' ORDER BY dataCriacao ASC LIMIT 5;");



// print_r($resultSlides);

return $resultSlides;

$stmt->close();
$conn->close();
