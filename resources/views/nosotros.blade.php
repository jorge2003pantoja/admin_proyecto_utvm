<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Nosotros</title>
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

        /* Estilo para el título Nosotros */
        h1 {
            text-align: center;
            color: #8D1E0E;
            font-size: 60px;
        }

        h2 {
            text-align: center;
            color: #8D1E0E;
        }

        h3 {
            color: #8D1E0E;
        }

        p {
            font-size: 20px;
        }

        /* Estilo específico para la sección de valores */
        .valores-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .valor {
            flex: 1 1 45%;
            background-color: #FFF;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        .text-valor {
            font-size: 15px;
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
                        <a class="nav-link I" href="nosotros">Nosotros</a>
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

<h1>Nosotros</h1>

<!---------- Nueva Sección ---------->
<div class="section-container">
    <img src="img/inicio2.PNG" alt="Producto">
    <div class="section-text">
        <h2>¿QUIENES SOMOS?</h2>
        <p>Somos una marca joven y dinámica que nace con la misión de transformar la 
            forma en que las personas sazonan sus comidas. Nuestro enfoque está en ofrecer 
            una experiencia única, basada en la calidad y frescura de nuestras especias e 
            ingredientes naturales. Creamos sazonadores innovadores, diseñados para satisfacer 
            los paladares más exigentes, realzando el sabor de cada platillo con un toque especial.</p>
        <p>En Sazonix, creemos que un buen sazonador debe ser más que un simple complemento; 
            debe ser la conexión entre la naturaleza y tu mesa, respetando el medio ambiente 
            y promoviendo un estilo de vida saludable. Con pasión y dedicación, buscamos posicionarnos 
            como líderes en el mercado, siempre fieles a nuestra esencia: natural, auténtica e innovadora.</p>
    </div>
</div>

<!---------- Nueva Sección Invertida ---------->
<div class="section-container section-container-inverted">
    <img src="img/nosotros1.PNG" alt="Producto" class="order-md-2">
    <div class="section-text order-md-1">
        <h2>MISIÓN</h2>
        <p>Somos una marca de sazonadores nueva en el mercado que busca ofrecer un producto
            innovador elaborado a base de especias e ingredientes naturales, satisfaciendo las
            necesidades del consumidor, dándonos a conocer a través de nuestros valores y ética profesional.</p>
    </div>
</div>

<!---------- Nueva Sección ---------->
<div class="section-container">
    <img src="img/nosotros2.PNG" alt="Producto">
    <div class="section-text">
        <h2>VISIÓN</h2>
        <p>Ser la mejor marca de sazonadores reconocida por las familias mexicanas</p>
    </div>
</div>

<!---------- Nueva Sección Invertida ---------->
<div class="section-container section-container-inverted">
    <img src="img/nosotros1.PNG" alt="Producto" class="order-md-2">
    <div class="section-text order-md-1">
        <h2>VALORES</h2>
        <p>En Sazonix se sabe que los valores son parte fundamental para tener un
            ambiente laboral correcto y armónico, ya que incita a una mejor productividad
            tanto de los empleados como del alto mando, reflejándose en el producto que
            se ofrece y la manera en cómo se comercializa, así mismo el trato con los
            proveedores y colaboradores.</p>
        <p>A continuación, se mencionan los valores principales en los que se basa la organización:</p>
    </div>
</div>

<!---------- Nueva Sección de Valores ---------->
<div class="valores-container">
    <div class="valor">
        <h3>Responsabilidad</h3>
        <p class="text-valor">La responsabilidad es la cualidad que
            tiene aquel individuo que cumple sus obligaciones o promesas
            y asume las consecuencias de sus actos. En Sazonix se tiene
            el compromiso de ser responsables con la calidad del producto
            que se ofrece a la población, entregando en tiempo y forma a
            los distintos puntos de venta, de igual forma contribuir a un
            mejor ambiente, optando por empaquetar en botellas que se pueden
            reutilizar, ya que se tiene claro que, para tener crecimiento
            en el mercado, la responsabilidad es fundamental.</p>
    </div>
    <div class="valor">
        <h3>Respeto</h3>
        <p class="text-valor">El respeto es una cualidad o valor
            que consiste en la consideración y valoración que tiene
            un individuo hacia las otras personas, hacia una idea o
            una institución. Sazonix implementa el valor del respeto
            para lograr una armoniosa interacción social entre los empleados,
            colaboradores y clientes de manera reciproca.</p>
    </div>
    <div class="valor">
        <h3>Compromiso</h3>
        <p class="text-valor">Es la capacidad que tiene el ser
            humano para tomar conciencia de la importancia de cumplir
            algo, aceptando la responsabilidad de llevar a cabo lo que
            ha prometido. Sazonix está comprometido con los clientes
            en ofrecer un producto, saludable, natural y que beneficie
            a su salud. Además de estar comprometidos en reducir el
            impacto ecológico al ser un producto sustentable. En el
            ambiente laboral hacer que los empleados se involucren
            tanto con su trabajo como con los objetivos y valores.</p>
    </div>
    <div class="valor">
        <h3>Eficiencia</h3>
        <p class="text-valor">Se define como la capacidad de disponer
            de alguien o algo para conseguir el cumplimiento adecuado
            de una función. En Sazonix se fomenta la eficiencia en los
            trabajadores ya que cada uno de ellos realiza de la mejor
            manera las actividades que se le asigna, mejorando la productividad
            para un mejor desempeño.</p>
    </div>
    <div class="valor">
        <h3>Confiabilidad</h3>
        <p class="text-valor">Mantener la constancia y cumplir con
            las expectativas y ser responsable con cada una de las
            acciones de manera que los resultados sean confiables.
            Cada uno de los integrantes tiene en cuenta la confianza,
            debido a que las actividades realizadas son de suma importancia
            como lo son el cuidado del equipo, maquinaria y de los recursos
            con los que se cuenta, para lograr un mejor rendimiento. </p>
    </div>
    <div class="valor">
        <h3>Seguridad</h3>
        <p class="text-valor">Puede considerarse como el estado de
            ausencia de peligro de condiciones que puedan provocar
            daño físico, psicológico o material en los individuos
            en la sociedad en general. En Sazonix se integra la seguridad,
            ofreciendo un seguro médico para cada uno de los empleados
            que la componen, fomentando así un entorno de trabajo seguro.
            Cuidando la integridad física y moral. </p>
    </div>
    <div class="valor">
        <h3>Amabilidad</h3>
        <p class="text-valor">La amabilidad es una expresión de
            tolerancia y buen trato. Refleja el respeto que se le
            ebe a los demás, los derechos y dignidad, así se esté de
            acuerdo o no con las opiniones o creencias que se tengan.
            La amabilidad es el comportamiento en el cual Sazonix se
            muestra cortés y afectuosos con los demás. Es un valor
            fundamental para relacionarse de manera positiva y satisfactoria
                con los otros, reflejándose en los actos cotidianos.</p>
    </div>
</div>

<!---------- Nueva Sección ---------->
<div class="section-container">
    <img src="img/nosotros2.PNG" alt="Producto">
    <div class="section-text">
        <h2>OBJECTIVO</h2>
        <p>Nuestro objetivo en Sazonix es convertirnos en la marca de referencia 
            para quienes buscan los mejores sazonadores para carnes en la región. 
            Aspiramos a ofrecer productos que no solo realcen el sabor de cada corte, 
            sino que también aporten un toque distintivo y memorable a cada receta. 
            Sabemos que la calidad y autenticidad son clave, por eso cuidamos cada detalle 
            en la selección de nuestras especias, garantizando frescura y un equilibrio 
            perfecto de sabores.
            <br><br>
            A través de la innovación constante, queremos satisfacer las expectativas de los 
            amantes de la cocina, desde chefs profesionales hasta quienes disfrutan de preparar 
            una buena parrillada en casa.  Con pasión y dedicación, buscamos no solo destacar 
            entre las mejores marcas, sino también crear un vínculo de confianza y preferencia 
            con nuestros consumidores, elevando el estándar de lo que un sazonador para carnes puede lograr.
        </p>
    </div>
</div>

</body>
</html>
