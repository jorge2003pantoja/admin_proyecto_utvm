<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Productos</title>
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

        .card {
            transition: transform 0.2s ease-in-out;
            background-color: #EC6014;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .modal-content {
            background-color: #FFF5E1;
        }

        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }

        h1 {
            color: #8D1E0E;
            font-size: 40px;
        }

        .card-title {
            color: #FFFFFF;
        }

        .modal-title {
            color: #8D1E0E;
            text-align: center;
        }

        strong {
            color: #8D1E0E;
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
                        <a class="nav-link I" href="producto">Productos</a>
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

<h1 class="text-center">Productos</h1>

<div class="container mt-5">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4">
            <div class="card mb-4" data-bs-toggle="modal" data-bs-target="#productoModal{{$producto->id}}">
                <img src="{{ asset('storage/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ Str::limit($producto->descripcion, 100) }}</p> <!-- Muestra una parte de la descripción -->
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="productoModal{{$producto->id}}" tabindex="-1" aria-labelledby="productoModalLabel{{$producto->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productoModalLabel{{$producto->id}}">{{ $producto->nombre }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage/' . $producto->imagen) }}" class="img-fluid mb-3" alt="{{ $producto->nombre }}">
                        <p>{{ $producto->descripcion }}</p>
                        <p><strong>Precio: </strong>${{ $producto->precio }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>
