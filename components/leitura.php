<?php
include_once './db/buscarPosts.php';
?>

<h3>Vale a Pena Ler!</h3>

<div class="card-post">
  <h4><?php echo $texto['tituloPost']; ?></h4>
  <p class="meta">
    <strong>Autor:</strong> <?php echo $texto['nomeAutor']; ?> |
    <strong>Criado em:</strong> <?php echo date('d/m/Y H:i', strtotime($texto['dataCriacao'])); ?>
    <?php if (!empty($texto['dataModificacao'])): ?>
      | <strong>Modificado em:</strong> <?php echo date('d/m/Y H:i', strtotime($texto['dataModificacao'])); ?>
    <?php endif; ?>
  </p>
  <p class="conteudo-post"><?php echo nl2br($texto['textoPost']); ?></p>
</div>
