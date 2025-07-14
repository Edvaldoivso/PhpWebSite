
<?php
include_once './db/conexao.php';

// Exemplo de consulta
$resultado = $conn->query("SELECT * FROM `wp_postTI` WHERE idPost = 1");

$texto = $resultado->fetch_assoc();

// echo '<br>';
// print_r($texto);

$conn->close();

return $texto;
?>
