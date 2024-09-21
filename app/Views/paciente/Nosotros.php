<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/nosotros.css') ?>" rel="stylesheet">


</head>

<body>
    <!--Medicos-->
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <a href="http://localhost/Clinica-Medica-Grupo-4/public/"> <img
                    src="https://marketplace.canva.com/EAFdCebXgRs/1/0/1600w/canva-logotipo-medicina-simple-azul-y-blanco-4UzHG4FY3uw.jpg"
                    alt="Logo Clínica Médica">
            </a>
            <div>
                <a href="http://localhost/Clinica-Medica-Grupo-4/public/" class="text-white letras_links">
                <h1>Clínica Medica</h1>
                <p>Servicios Medicos</p>
                </a>
            </div>
        </div>

        <div class="social-icons">
            <a href="http://localhost/Clinica-Medica-Grupo-4/public/"><i class="fas fa-home"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://gt.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://x.com/?lang=es"><i class="fab fa-twitter"></i></a>
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
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-underline">
                    <li class="nav-item">
                        <a class="nav-link" href="Horarios"><span class="hover-effect">Horarios</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Nosotros"><span class="hover-effect">Sobre Nosotros</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Medicos"><span class="hover-effect">Médicos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ubicacion"><span class="hover-effect">Ubicación</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactanos"><span class="hover-effect">Contáctanos</span></a>
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
    <!--Sobre Nosotros-->
   
    <!-- Sección Acerca de -->
    <div class="container mt-5">
        <div class="about-section">
            <div class="about-text">
                <p class="text-muted">¿Quiénes somos?</p>
                <h1 class="about-title">Acerca de <span class="highlight">Nuestra Clinica</span></h1>
                <p class="text-black">Somos una empresa Guatemalteca, enfocada en brindar un servicio integral de cuidados hospitalarios en
                    casa, centrados en el bienestar del paciente y su familia.</p>
                <p class="text-black">Contamos con un equipo de profesionales y especialistas altamente calificados dedicados a brindar
                    soluciones adaptadas a las necesidades individuales de cada paciente.</p>
                <p class="text-black">Brindamos la mejor atención y tratamiento médico con dedicación personalizada, de forma segura y
                    tranquila en la comodidad del hogar y de la mano de la familia.</p>
            </div>
            <div class="about-image">
                <img src="imagenes/paciente/clinica_medica.jpg" alt="Atención médica" width="500px" height="300px">
            </div>
        </div>
    </div>

    <!-- Sección CTA -->
    <div class="cta-section">
        <p class="text-muted">Nuestra Clinica</p>
        <h2>Nuestra naturaleza es cuidar</h2>
        <a href="Contactanos" class="btn">Contáctenos ahora</a>
    </div>

    <!-- Sección Visión y Misión -->
    <div class="container mt-5">
        <div class="vision-mision-section">
            <div class="vision-mision-card">
                <h3>Nuestra visión</h3>
                <p class="text-black">Ser el servicio hospitalario y atención médica en casa más completo, ético y respetable de Guatemala.
                </p>
            </div>
            <div class="vision-mision-card">
                <h3>Nuestra misión</h3>
                <p class="text-black">Ser un modelo de prestación de servicios hospitalarios y de atención médica en casa, que sea seguro,
                    confiable y de atención profesional que de manera personalizada se adapte a las necesidades de salud
                    de cada paciente y su familia, de una forma sostenible en el tiempo.</p>
            </div>
        </div>
    </div>

    <!-- Sección Nuestros Valores -->
    <div class="valores-section">
        <h2 class="valores-title">Nuestros valores</h2>
        <div class="container">
            <div class="valores-grid">
                <div class="valor-card">
                    <h4>Integridad</h4>
                    <p>Tenemos apego inquebrantable a los valores que nos representan.</p>
                </div>
                <div class="valor-card">
                    <h4>Vocación de Servicio</h4>
                    <p>Somos apasionados por el bienestar integral de nuestros pacientes y sus familias.</p>
                </div>
                <div class="valor-card">
                    <h4>Empatía</h4>
                    <p>Nos centramos en el bienestar de nuestros pacientes y sus familias.</p>
                </div>
                <div class="valor-card">
                    <h4>Innovación</h4>
                    <p>Nos capacitamos en nuevos procesos, equipos y servicios. Lo mejor para brindar un servicio de
                        alta calidad.</p>
                </div>
                <div class="valor-card">
                    <h4>Ética</h4>
                    <p>Nuestros procesos e información son transparentes, honestos y al alcance de todos.</p>
                </div>
            </div>
        </div>
    </div>
    <!--FOOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Institucional -->
                <div class="col-md-4">
                    <h5>INSTITUCIONAL</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Horarios de atención</a></li>
                        <li><a href="#">Coberturas que atendemos</a></li>
                        <li><a href="#">Credencial de servicios SAAV</a></li>
                        <li><a href="#">Reservar turnos</a></li>
                        <li><a href="#">Cómo llegar</a></li>
                    </ul>
                </div>

                <!-- Contáctenos -->
                <div class="col-md-4">
                    <h5>CONTÁCTENOS</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Consultas y sugerencias</a></li>
                        <li><a href="#">Trabaje con nostros</a></li>
                        <li><a href="#">Profesionales de la salud</a></li>
                        <li><a href="#">Agente propaganda pagada</a></li>
                        <li><a href="#">Formulario de solicitud</a></li>
                    </ul>
                </div>

                <!-- Información de Interés -->
                <div class="col-md-4">
                    <h5>INFORMACIÓN DE INTERÉS</h5>
                    <ul class="list-unstyled">
                        <li>Plasma rico en plaquetas</li>
                        <li><a href="#"> Vacunación antigripal
                                2024</a></li>
                        <li><a href="#"> Prevención del dengue</a></li>
                        <li><a href="#"> Acumputura</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="row mt-4">
                <div class="col text-center">
                    <p>Todos los derechos reservados ® | República de Guatemala| Clinica Medica</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>