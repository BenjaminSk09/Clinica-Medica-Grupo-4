<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/Ubicacion.css') ?>" rel="stylesheet">


</head>

<body>


    <!--Medicos-->
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <a href=""> <img
                    src="https://marketplace.canva.com/EAFdCebXgRs/1/0/1600w/canva-logotipo-medicina-simple-azul-y-blanco-4UzHG4FY3uw.jpg"
                    alt="Logo Clínica Médica">
            </a>
            <div>
                <h1>Clínica Medica</h1>
                <p>Servicios Medicos</p>
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


    <!--Ubicacion-->


    <div class="mapa">
        <h1>Ubicación</h1>
        <div class="maps-container"> <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.550421218291!2d-90.5152284251268!3d14.624668085864599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a23a6a8525b1%3A0xd33a1c274d5f3294!2sIntecap%20TIC&#39;S%20zona%2005!5e0!3m2!1ses-419!2sgt!4v1726718041729!5m2!1ses-419!2sgt"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe> <iframe
                src="https://embed.waze.com/iframe?zoom=16&lat=14.624741&lon=-90.513454&ct=livemap" allowfullscreen></iframe>
        </div>
        <div class="qr-code"> <img src="data:image/png;base64,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"
                alt="Waze QR Code"> </div>
        
    </div>

    <!--FOOTER-->
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>