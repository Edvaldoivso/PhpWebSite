<?php
include_once './db/buscarPosts.php'; 
?>
<div class="card-post">

  <h3><?php echo $texto['tituloPost']; ?></h3>
    <p class="conteudo-post"><?php echo nl2br($texto['textoPost']); ?></p>
  <p class="meta">
    <strong>Autor:</strong> <?php echo $texto['nomeAutor']; ?> |
    <strong>Criado em:</strong> <?php echo date('d/m/Y', strtotime($texto['dataCriacao'])); ?>
  
  </p>

</div>
