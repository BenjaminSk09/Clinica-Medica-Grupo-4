<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Médica</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    /* Reset básico */
    body,
    h1,
    h2,
    p,
    ul,
    li {
        margin: 0;
        padding: 0;
        list-style: none;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f4f4f4;
        color: #333;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: white;
        border-bottom: 1px solid #ddd;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .search-bar {
        display: flex;
        align-items: center;
        background-color: #eee;
        padding: 5px;
        border-radius: 20px;
    }

    .search-bar input {
        border: none;
        background: none;
        outline: none;
        padding: 5px;
    }

    .social-icons i {
        margin-left: 15px;
        font-size: 18px;
        cursor: pointer;
    }

    nav {
        display: flex;
        justify-content: center;
        padding: 20px 0;
        background-color: white;
        border-bottom: 1px solid #ddd;
    }

    nav ul {
        display: flex;
    }

    nav li {
        margin: 0 15px;
    }

    nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .especialidades {
        text-align: center;
        padding: 40px 0;
    }

    .especialidades-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .especialidad-item {
        width: 100px;
        height: 100px;
        background-color: #ddd;
        margin: 0 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .navbar-brand img {
        width: 40px;
        /* Logo tamaño ajustado */
        margin-right: 10px;
    }

    .navbar-nav .nav-link {
        font-weight: bold;
    }

    .search-bar {
        max-width: 200px;
        margin-left: auto;
        margin-right: auto;
    }

    .social-icons a {
        margin-left: 10px;
        color: #000;
    }


    @media (max-width: 993px) {
        .navbar-nav {
            text-align: center;
            /* Centra el texto del menú desplegable */
        }

        .navbar-collapse {
            justify-content: center;
            /* Centra los elementos del menú en pantallas pequeñas */
        }
    }

    .fixed-image {
        width: 100%;
        /* Ancho 100% del contenedor */
        height: 400px;
        /* Altura fija para pantallas grandes */
        object-fit: cover;
        /* Ajusta la imagen para cubrir el contenedor sin distorsionarse */
    }

    /* Media query para pantallas menores a 768px */
    @media (max-width: 768px) {
        .carousel-inner {
            margin: 0 5px;
            /* Márgenes de 5px a los lados */
        }

        .fixed-image {
            height: 250px;
            /* Menor altura para pantallas pequeñas */
        }
    }

    .servicios {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .servicio {
        flex: 1 1 calc(25% - 20px);
        max-width: calc(25% - 20px);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 20px;
    }

    .servicio img {
        width: 150px;
        /* Ajusta el tamaño del círculo */
        height: 150px;
        border-radius: 50%;
        /* Crea la forma circular */
        object-fit: cover;
        /* Para que la imagen se ajuste dentro del
    círculo */
        margin-bottom: 10px;
    }

    @media screen and (max-width: 1200px) {
        .servicio {
            flex: 1 1 calc(33.33% - 20px);
            max-width: calc(33.33% - 20px);
        }
    }

    @media screen and (max-width: 768px) {
        .servicio {
            flex: 1 1 calc(50% - 20px);
            max-width: calc(50% - 20px);
        }
    }

    @media screen and (max-width: 576px) {
        .servicio {
            flex: 1 1 100%;
            max-width: 100%;
        }
    }

    footer {
            background-color: #ADD8E6; /* Color aqua */
            color: #000; /* Color del texto */
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .footer-section {
            margin: 0 20px;
            flex: 1 1 200px; /* Flexibilidad y ancho mínimo */
            text-align: center;
        }
        .footer-section h3 {
            margin-top: 0;
        }
        .footer-section a {
            color: #000; /* Color del texto del enlace */
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }
        .footer-section a:hover {
            text-decoration: underline;
        }
        .footer-certifications img {
            height: 30px;
            margin: 0 10px;
        }
    </style>
</head>

<body>

    <!-- Encabezado -->
    <header>
        <div class="logo">
            <img src="https://marketplace.canva.com/EAFdCebXgRs/1/0/1600w/canva-logotipo-medicina-simple-azul-y-blanco-4UzHG4FY3uw.jpg"
                alt="Logo Clínica Médica">

            <div>
                <h1>Clínica Medica</h1>
                <p>Servicios Medicos</p>
            </div>
        </div>

        <div class="social-icons">
            <i class="fas fa-home"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-twitter"></i>
        </div>
    </header>
    <!-- Navegación principal -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Menú principal -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Horarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- Botón del menú desplegable -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tipo de Usuario
                        </a>
                        <!-- Elementos del menú desplegable -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Empleado</a></li>
                            <li><a class="dropdown-item" href="#">Paciente</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <!-- Imagenes de carrusel-->
    <div class="container my-4">
        <!-- Contenedor centrado -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.unitecoprofesional.es/blog/wp-content/uploads/2021/05/sesiones-clinicas.jpg"
                        class="d-block w-100 img-fluid fixed-image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.clinica25demayo.com.ar/wp-content/uploads/especialidades-12-clinica-medica.jpg"
                        class="d-block w-100 img-fluid fixed-image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://mibluemedical.com/wp-content/uploads/elementor/thumbs/Captura-de-Pantalla-2022-09-23-a-las-15.34.38-pv7dcchde73d8jwcmge8bkzbdvo5h0eouabpuz28ym.png"
                        class="d-block w-100 img-fluid fixed-image" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="servicios">
        <div class="servicio"> <img
                src="https://www.ceupe.com/images/easyblog_articles/4305/b2ap3_large_profesion-de-nutricionista-clinico.jpg"
                alt="">
            <p>Nutricionistas</p>
        </div>
        <div class="servicio"> <img
                src="https://i0.wp.com/angios.com/wp-content/uploads/2023/04/2.jpg?fit=1000%2C1000&ssl=1" alt="">
            <p>Cardiología</p>
        </div>
        <div class="servicio"> <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw__KrmhQndjLwdZi-irYzru3_q0CbOx8YgA&s"
                alt="">
            <p>Dermatología</p>
        </div>
        <div class="servicio"> <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZuYldrUuUU0A7OoNRzGYAC05HK2799mPmdg&s"
                alt="">
            <p>Traumatología</p>
        </div>
        <div class="servicio"> <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYz1wolq40AC4_Hgp9PHs7hCDj5Vywp5BwZQ&s"
                alt="">
            <p>Servicios Electrónicos</p>
        </div> <!-- Añade los servicios restantes -->
        <div class="servicio"> <img src="https://www.ui1.es/sites/default/files/blog/images/sistema_inmunologico.jpg"
                alt="">
            <p>Inmunología</p>
        </div>
        <div class="servicio"> <img src="https://sisalud.net/wp-content/uploads/2021/11/hematologia.jpg" alt="">
            <p>Hematología</p>
        </div>
        <div class="servicio"> <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDYc-7V_v3UXb8SI9XO2y4rA_gsRmfDlZGRw&s"
                alt="">
            <p>Radiología</p>
        </div>
    </div>





    <footer>
        <div class="footer-content">
            <div class="footer-section footer-contact">
                <h3>Información de Contacto:</h3>
                <p>Dirección: Calle Ejemplo 123, Ciudad, País</p>
                <p>Teléfono: (+502) 0000-0000</p>
                <p>Correo Electrónico: <a href="mailto:info@walkintheclouds.com">info@walkintheclouds.com</a></p>
            </div>

            <div class="footer-section footer-links">
                <h3>Enlaces Rápidos:</h3>
                <a href="#">Inicio</a>
                <a href="#">Sobre Nosotros</a>
                <a href="#">Servicios</a>
                <a href="#">Productos</a>
                <a href="#">Blog</a>
                <a href="#">Contacto</a>
            </div>

            <div class="footer-section footer-policies">
                <h3>Políticas y Términos:</h3>
                <a href="#">Política de Privacidad</a>
                <a href="#">Términos y Condiciones</a>
                <a href="#">Política de Cookies</a>
            </div>

            <div class="footer-section footer-help">
                <h3>Centro de Ayuda:</h3>
                <a href="#">FAQ</a>
                <a href="#">Soporte Técnico</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>