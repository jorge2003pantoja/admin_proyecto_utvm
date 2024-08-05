<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contacto</title>
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

        h1 {
            color: #8D1E0E;
            font-size: 40px;
        }

        .contact-form {
            background-color: #8D1E0E;
            padding: 20px;
            border-radius: 10px;
            color: white;
        }

        .contact-form h2 {
            margin-bottom: 20px;
        }

        .contact-form .form-control {
            margin-bottom: 15px;
        }

        .contact-info {
            background-color: #8D1E0E;
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
        }

        .contact-info .logo-contact {
            width: 100px;
            height: 100px;
            border-radius: 50%; /* Esto hace que la imagen sea redonda */
            object-fit: cover; /* Asegura que la imagen no se deforme */
            margin-bottom: 15px;
        }

        .contact-info a {
            color: #FCEABC;
            margin: 0 10px;
            font-size: 24px;
        }

        p {
            color: #FCEABC;
            font-size: 20px;
        }

        h2 {
            text-align: center;
        }

        /* Añadir separación entre columnas en pantallas pequeñas */
        @media (max-width: 767.98px) {
            .row {
                margin-bottom: 20px; /* Añadir margen inferior en pantallas pequeñas */
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
                        <a class="nav-link" href="/">Inicio</a>
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
                        <a class="nav-link I" href="contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<br><br><br><br>

<h1 class="text-center">Contacto</h1>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-3 mb-md-0"> <!-- Añadir margen inferior en pantallas pequeñas -->
            <div class="contact-form">
                <h2>Contacto</h2>
                <form>
                    <input type="text" class="form-control" placeholder="NOMBRE COMPLETO">
                    <input type="text" class="form-control" placeholder="TELÉFONO">
                    <input type="email" class="form-control" placeholder="CORREO ELECTRONICO">
                    <textarea class="form-control" rows="4" placeholder="MENSAJE"></textarea>
                    <button type="submit" class="btn btn-light mt-3">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-info">
                <img class="logo-contact" src="{{asset('img/logo.jpg')}}" alt="Logo">
                <p>Sasonix@gmail.com</p>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
