<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Recetas</title>
    <style>
        .header-bg {
            background-color: #FEBD57;
        }

        .navbar-nav {
            margin-left: auto;
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

        h1 {
            color: #8D1E0E;
            font-size: 40px;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .modal-body {
            background-color: #FCEAC6;
        }

        .modal-header {
            background-color:#FEBD57;
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
                    <li class="navbar-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="navbar-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
                    <li class="navbar-item"><a class="nav-link" href="producto">Productos</a></li>
                    <li class="navbar-item"><a class="nav-link I" href="recetas">Recetas</a></li>
                    <li class="navbar-item"><a class="nav-link" href="contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<br><br><br><br>

<h1 class="text-center">Recetas</h1>

<div class="container mt-5">
    <div class="row g-4">
        <!-- Tarjeta 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="img/Tacos.JPEG" class="card-img-top" alt="Receta 1">
                <div class="card-body text-center">
                    <h5 class="card-title">"Tacos Ahumados de Res con Sazonix"</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReceta1">Ver Receta</button>
                </div>
            </div>
        </div>
        <!-- Tarjeta 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="img/Pollo.JPEG" class="card-img-top" alt="Receta 2">
                <div class="card-body text-center">
                    <h5 class="card-title">"Pollo Dorado en Miel y Sazonix"</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReceta2">Ver Receta</button>
                </div>
            </div>
        </div>
        <!-- Tarjeta 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="img/Costillas.JPEG" class="card-img-top" alt="Receta 3">
                <div class="card-body text-center">
                    <h5 class="card-title">"Costillas de Cerdo Glaseadas con Sazonix"</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReceta3">Ver Receta</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modales -->
<div class="modal fade" id="modalReceta1" tabindex="-1" aria-labelledby="modalReceta1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReceta1Label">Tacos Ahumados de Res con Sazonix</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <img src="img/Tacos.JPEG" class="card-img-top" alt="Receta 1">
                <h6>Ingredientes:</h6>
                <ul>
                    <li>500 g de arrachera o bistec de res</li>
                    <li>1 cucharada de Sazonix</li>
                    <li>1 cucharada de aceite de oliva</li>
                    <li>Tortillas de maíz, aguacate y salsa al gusto</li>
                </ul>
                <h6>Pasos:</h6>
                <ol>
                    <li>Embadurna la carne con Sazonix y aceite de oliva, dejando que absorba su magia por 10 minutos.</li>
                    <li>Ásala a fuego alto hasta sellar esos jugos irresistibles (3-4 minutos por lado).</li>
                    <li>Corta en tiras, sirve en tortillas calientes y corona con aguacate y salsa.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalReceta2" tabindex="-1" aria-labelledby="modalReceta2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReceta2Label">Pollo Dorado en Miel y Sazonix</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <img src="img/Pollo.JPEG" class="card-img-top" alt="Receta 3">
                <h6>Ingredientes:</h6>
                <ul>
                    <li>4 piezas de pollo (muslos o pechuga)</li>
                    <li>1 cucharada de Sazonix</li>
                    <li>2 cucharadas de miel de abeja</li>
                    <li>Jugo de 1 naranja</li>
                </ul>
                <h6>Pasos:</h6>
                <ol>
                    <li>Baña el pollo con Sazonix, miel y jugo de naranja, logrando un equilibrio perfecto entre dulce y salado.</li>
                    <li>Hornea a 200 °C por 25-30 minutos, hasta que luzca dorado y brillante.</li>
                    <li>Sirve con arroz o ensalada y sorprende a tus comensales.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalReceta3" tabindex="-1" aria-labelledby="modalReceta3Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReceta3Label">Costillas de Cerdo Glaseadas con Sazonix</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <img src="img/Costillas.JPEG" class="card-img-top" alt="Receta 3">
                <h6>Ingredientes:</h6>
                <ul>
                    <li>500 g de costillas de cerdo</li>
                    <li>1 cucharada de Sazonix</li>
                    <li>3 cucharadas de salsa BBQ</li>
                    <li>1 cucharada de vinagre balsámico</li>
                </ul>
                <h6>Pasos:</h6>
                <ol>
                    <li>Frota las costillas con Sazonix, creando una capa intensa de sabor.</li>
                    <li>Combina la salsa BBQ con el vinagre y unta generosamente sobre las costillas.</li>
                    <li>Hornea a 180 °C durante 45 minutos o hasta que estén tiernas. Sirve y deja que el sabor hable por sí solo.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

</body>
</html>
