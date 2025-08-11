<head>
    <meta charset="UTF-8">
    <title>Carrossel Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/noticias.css">
</head>


<body>

    <div id="meuCarrossel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./imagens/droneAgricola.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <a href="https://erotecnologia.com" style="text-decoration: none; color: inherit;">
                        <h5>Aventura nas Montanhas</h5>
                        <p>Explore trilhas e vistas deslumbrantes.</p>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/hidroponia.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <a href="https://erotecnologia.com" style="text-decoration: none; color: inherit;">
                        <h5>Aventura nas Montanhas</h5>
                        <p>Explore trilhas e vistas deslumbrantes.</p>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/luzesPainel.jpg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <a href="https://erotecnologia.com" style="text-decoration: none; color: inherit;">
                        <h5>Aventura nas Montanhas</h5>
                        <p>Explore trilhas e vistas deslumbrantes.</p>
                    </a>
                </div>
            </div>
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