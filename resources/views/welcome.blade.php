<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
    <style>
        .header-bg {
            background-color: #FEBD57;
        }

        .navbar-nav {
            margin-left: auto; /* Mueve el nav al final del contenedor */
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        a.I {
            color: #8D1E0E;
            font-weight: 700;
        }

        body {
            background-color: #FCEAC6;
        }

        /* Estilo para las secciones generales */
        .section-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #FCEAC6;
        }

        @media(min-width: 768px) {
            .section-container {
                flex-direction: row;
                justify-content: space-between;
            }
        }

        .section-container img {
            max-width: 100%;
            height: auto;
        }

        .section-text {
            padding: 20px;
            margin-top: 20px; /* Espaciado en pantallas pequeñas */
            z-index: 1;
            position: relative;
        }

        @media(min-width: 768px) {
            .section-text {
                margin-top: 0;
                margin-left: -50px; /* Para el efecto de superposición en pantallas grandes */
            }
        }

        /* Estilo específico para la sección invertida */
        .section-container-inverted {
            background-color: #FCEAC6;
        }

        .section-container-inverted .section-text {
            padding-right: 20px;
            padding-left: 0;
        }

        @media(min-width: 768px) {
            .section-container-inverted .section-text {
                margin-left: 0;
                margin-right: -50px; /* Para el efecto de superposición en pantallas grandes */
            }
        }
    </style>
</head>
<body>
<header class="header-bg fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo.jpg')}}" alt="Logo" height="70px">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mi-menu">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a class="nav-link I" href="/">Inicio</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="nosotros">Nosotros</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="producto">Productos</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="recetas">Recetas</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<br><br><br><br>

<!---------- Carrusel de Imagenes ---------->
<div id="carousel01" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel01" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel01" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel01" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carousel01" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/carrusel1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carrusel1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carrusel1.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carrusel1.png')}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel01" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel01" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!---------- Nueva Sección ---------->
<div class="section-container">
    <img src="img/inicio1.PNG" alt="Producto">
    <div class="section-text">
        <p>Lorem ipsum dolor sit amet consectetur. Enim rhoncus lectus porttitor velit netus mauris sit posuere leo. Turpis tristique rhoncus eget non senectus mollis.</p>
        <p>Nunc viverra cursus ante tortor. Donec fermentum urna est sed nunc ut. Donec convallis nulla condimentum justo.</p>
        <p>Sapien maecenas lectus sit sit vulputate enim risus pharetra. Arcu mauris nisi mus vitae turpis egestas sem at nisi. Leo eu eu sem sed sociis. Sed mi eu tellus laoreet tempor praesent. A enim leo orci sit.</p>
    </div>
</div>

<!---------- Nueva Sección Invertida ---------->
<div class="section-container section-container-inverted">
    <img src="img/inicio2.PNG" alt="Producto" class="order-md-2">
    <div class="section-text order-md-1">
        <p>Lorem ipsum dolor sit amet consectetur. Enim rhoncus lectus porttitor velit netus mauris sit posuere leo. Turpis tristique rhoncus eget non senectus mollis.</p>
        <p>Nunc viverra cursus ante tortor. Donec fermentum urna est sed nunc ut. Donec convallis nulla condimentum justo.</p>
        <p>Sapien maecenas lectus sit sit vulputate enim risus pharetra. Arcu mauris nisi mus vitae turpis egestas sem at nisi. Leo eu eu sem sed sociis. Sed mi eu tellus laoreet tempor praesent. A enim leo orci sit.</p>
    </div>
</div>

<!---------- Nueva Sección ---------->
<div class="section-container">
    <img src="img/inicio3.PNG" alt="Producto">
    <div class="section-text">
        <p>Lorem ipsum dolor sit amet consectetur. Enim rhoncus lectus porttitor velit netus mauris sit posuere leo. Turpis tristique rhoncus eget non senectus mollis.</p>
        <p>Nunc viverra cursus ante tortor. Donec fermentum urna est sed nunc ut. Donec convallis nulla condimentum justo.</p>
        <p>Sapien maecenas lectus sit sit vulputate enim risus pharetra. Arcu mauris nisi mus vitae turpis egestas sem at nisi. Leo eu eu sem sed sociis. Sed mi eu tellus laoreet tempor praesent. A enim leo orci sit.</p>
    </div>
</div>

</body>
</html>
