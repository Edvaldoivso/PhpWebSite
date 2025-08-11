<?php
include_once './db/noticias.php';
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/noticias.css">
</head>

<body>

    <div id="meuCarrossel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($resultSlides as $index => $slide): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img src="./imagens/<?= $index + 1 ?>.jpg" class="d-block w-100" alt="Slide <?= $index + 1 ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="https://erotecnologia.com" style="text-decoration: none; color: inherit;">
                            <h5><?= htmlspecialchars($slide['tituloPost']) ?></h5>
                            <p>
                                <?php
                                $texto = $slide['textoPost'];
                                $textoLimitado = mb_strlen($texto) > 50
                                    ? mb_substr($texto, 0, 50) . '...'
                                    : $texto;
                                echo nl2br(htmlspecialchars($textoLimitado));
                                ?>
                            </p>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#meuCarrossel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#meuCarrossel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>