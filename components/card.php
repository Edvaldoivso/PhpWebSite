 <link rel="stylesheet" href="./css/card.css">

<?php
include_once './db/exibeCards.php';
?>

<?php foreach ($resultadoCards as $post): ?>
    <div class="card">
        <h3><?php echo htmlspecialchars($post['tituloPost']); ?></h3>
        <p>
            <?php
            $texto = $post['textoPost'];
            $textoLimitado = mb_strlen($texto) > 50
                ? mb_substr($texto, 0, 50) . '...'
                : $texto;
            echo nl2br(htmlspecialchars($textoLimitado));
            ?>
        </p>
    </div>
<?php endforeach; ?>