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
        <p>La expansión de la industria alimentaria ha hecho que se extienda el uso de especias y 
            condimentos en restaurantes, así como en cadenas de comida rápida, ya que se emplean para 
            dar sabor y aroma a los alimentos procesados. Además, a medida que los consumidores se 
            preocupan más por su salud o el bienestar del medio ambiente, de igual forma buscan 
            cada vez más productos naturales, ecológicos como lo son las especias y condimentos. 
            <br><br>
            Este factor es el que más ha influido en las perspectivas de mercado del sector de las 
            especias gracias al aumento de los pedidos y la demanda de productos de primera calidad, 
            debido al incremento de la renta disponible.
            <br><br>
            A medida que se realizan más estudios sobre las ventajas de las especias y condimentos 
            para la salud, por ello las personas preocupadas por su salud son cada vez más exigentes 
            y ofrecen lucrativas oportunidades de crecimiento para el mercado objetivo.
        </p>

    </div>
</div>

<!---------- Nueva Sección Invertida ---------->
<div class="section-container section-container-inverted">
    <img src="img/inicio2.PNG" alt="Producto" class="order-md-2">
    <div class="section-text order-md-1">
        <p>La aparición de marcas nacionales de hierbas y especias, el aumento de la 
            publicidad social para promover el producto de la marca ha fomentado aún más 
            la demanda del crecimiento del mercado de especias y condimentos. Las preferencias 
            de los consumidores juegan un papel vital en el impulso de la demanda de especias. 
            A medida que evolucionan los gustos de los consumidores, existe una inclinación 
            creciente hacia diversos sabores, cocinas étnicas, así como experiencias gastronómicas 
            aventureras. 
            <br><br>
            Esto impulsa la demanda de una amplia gama de especias y condimentos para satisfacer 
            diferentes preferencias culinarias. Los consumidores buscan productos naturales, 
            orgánicos o de etiqueta limpia, lo cual ayuda a impulsar la demanda de mezclas de 
            especias y condimentos sin aditivos artificiales, conservantes o ingredientes modificados 
            genéticamente. (NOTICIAS, 2023)
        </p>
    </div>
</div>

<!---------- Nueva Sección ---------->
<div class="section-container">
    <img src="img/inicio3.PNG" alt="Producto">
    <div class="section-text">
        <p>
            De acuerdo con el trabajo realizado en el proyecto de inversión formó parte del trabajo 
            integrador de “Gestión de Negocios y Proyectos” en la Universidad Tecnológica del Valle 
            del Mezquital, con la finalidad de realizar el estudio de mercado, estudio técnico y estudio 
            financiero para evaluar la rentabilidad de la producción de los sazonadores “SAZONIX”. 
            Se pudo observar con los datos obtenidos que el mercado de sazonadores y especias es muy 
            amplio y viable para su venta, ya que en los últimos años se ha podido apreciar un gran 
            incremento del consumo de estos, los cuales siguen ampliándose más conforme al tiempo.</p>
    </div>
</div>

</body>
</html>
