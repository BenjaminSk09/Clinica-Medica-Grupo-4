<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/nosotros.css') ?>" rel="stylesheet">
    <script src="codigo_js/paciente/nosotros.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <a href=""> <img
                    src="imagenes/paciente/Logo.png"
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
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
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




    <div class="nostros">
        <div class="container">
            <div class="main-text">
                <h2>Tú, nuestra razón de <span>ser</span></h2>
                <p>
                    <strong>Nos preocupamos por ti para aliviar tu sufrimiento y el de tu familia en momentos de
                        enfermedad.</strong> Gracias a esta visión hemos logrado convertirnos en líderes de humanismo,
                    conocimiento y tecnología al servicio del ser humano. <strong>Todo por y gracias a ti.</strong>
                </p>
                <p>
                    Y no pararemos. Hemos definido procesos asistenciales y administrativos eficientes, seguros y un
                    sistema de comunicación en red que te da acceso a la información y consultas que necesites de forma
                    inmediata. A la vez que trabajamos porque cada espacio que visites tenga un entorno agradable que
                    refleje el respeto que tenemos hacia el ser humano, de modo que sientas paz y armonía cada vez que
                    te encuentres en nuestras instalaciones.
                </p>
                <button class="btn-green">Ver servicios médicos</button>
            </div>
            <div class="missions">
                <div class="mission-item">
                    <div class="icon-circle">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Nuestra Misión</h3>
                    <p>Hospital El Pilar es una entidad guatemalteca con raíces españolas, centradas en la prevención de
                        enfermedades y promoción de la salud, que tiene como meta la excelencia en su servicio,
                        ofreciendo al paciente una solución eficiente, dotada de alta tecnología, centrada en sus
                        necesidades en un entorno de mejora continua para facilitar siempre una excelente experiencia.
                    </p>
                </div>
                <div class="mission-item">
                    <div class="icon-circle">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Nuestra Visión</h3>
                    <p>Ser reconocidos como centro de excelencia en cuanto a la práctica clínica, convirtiéndonos en
                        líderes del sector salud en la aplicación de proyectos de innovación focalizados en la mejora de
                        la experiencia sanitaria preventiva, diagnóstica y curativa, promotores de un trato
                        personalizado y adecuado a las necesidades de cada paciente a través de un enfoque integral con
                        capacidad de alta especialización.</p>
                </div>
            </div>
        </div>

    </div>




    <br> 
<!--Nuestros Valores-->

<div class="valores-container">
        <h1 class="text-center">Nuestros valores</h1>
        <div class="tabs">
            <!-- Botones para cambiar el contenido de los valores -->
            <button class="tab active" onclick="showValue('respeto')">Respeto</button>
            <button class="tab" onclick="showValue('compromiso')">Compromiso</button>
            <button class="tab" onclick="showValue('integridad')">Integridad</button>
            <button class="tab" onclick="showValue('trabajo')">Trabajo en equipo</button>
            <button class="tab" onclick="showValue('innovacion')">Innovación</button>
        </div>

        <div class="values-content">
            <!-- Contenido de Respeto -->
            <div class="value" id="respeto">
                <div class="value-icon" style="background-color: #20c997;">
                    <!-- Imagen de icono de Respeto -->
                    <img src="" alt="Respeto">
                </div>
                <div class="value-description">
                    <h3>Respeto</h3>
                    <p>Trato de manera digna a todas las personas.</p>
                </div>
            </div>

            <!-- Contenido de Compromiso -->
            <div class="value" id="compromiso" style="display: none;">
                <div class="value-icon" style="background-color: #007bff;">
                    <img src="compromiso-icon.png" alt="Compromiso">
                </div>
                <div class="value-description">
                    <h3>Compromiso</h3>
                    <p>Compromiso con la calidad y la atención al paciente.</p>
                </div>
            </div>

            <!-- Contenido de Integridad -->
            <div class="value" id="integridad" style="display: none;">
                <div class="value-icon" style="background-color: #ffc107;">
                    <img src="integridad-icon.png" alt="Integridad">
                </div>
                <div class="value-description">
                    <h3>Integridad</h3>
                    <p>Honestidad y ética en cada acción.</p>
                </div>
            </div>

            <!-- Contenido de Trabajo en equipo -->
            <div class="value" id="trabajo" style="display: none;">
                <div class="value-icon" style="background-color: #17a2b8;">
                    <img src="trabajo-icon.png" alt="Trabajo en equipo">
                </div>
                <div class="value-description">
                    <h3>Trabajo en equipo</h3>
                    <p>Colaboración y esfuerzo compartido para alcanzar objetivos comunes.</p>
                </div>
            </div>

            <!-- Contenido de Innovación -->
            <div class="value" id="innovacion" style="display: none;">
                <div class="value-icon" style="background-color: #e83e8c;">
                    <img src="innovacion-icon.png" alt="Innovación">
                </div>
                <div class="value-description">
                    <h3>Innovación</h3>
                    <p>Búsqueda constante de mejoras y nuevas soluciones.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>