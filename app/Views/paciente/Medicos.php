<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/medicos.css') ?>" rel="stylesheet">


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
<br>                
    <!-- Tarjeta de Doctor -->
    <div class="doctor1">
        <div class="doctor-card">
            <img src="https://w7.pngwing.com/pngs/703/42/png-transparent-user-icon-icono-de-usuario-pictogram-profile-avatar.png"
                alt="Foto del Doctor">
                <h2>Doctor 1</h2>
            <div class="doctor-info">
                <p><strong>Cortesía</strong></p>
                <p><strong>Especialidad:</strong> Ginecología y Obstetricia, Urología Ginecológica</p>
                <p><strong>Ubicación:</strong> 6ta av. 9-18 zona 10, edif. Sixtino II ala II nivel 9 clínica 901</p>
                <p><strong>Contacto:</strong> 2369-4148/5592-3789</p>
                <a href="#" class="profile-link">Ver perfil &gt;</a>
            </div>
        </div>
    <!-- Agrega más tarjetas de doctores según sea necesario -->
    </div>
    <div class="doctor2">
        <!-- Tarjeta de Doctor adicional (Ejemplo) -->
        <div class="doctor-card">
            <img src="https://w7.pngwing.com/pngs/703/42/png-transparent-user-icon-icono-de-usuario-pictogram-profile-avatar.png" alt="Foto de la Doctora">
            <div class="doctor-info">
                <h2>Doctor 2</h2>
                <p><strong>Titular</strong></p>
                <p><strong>Especialidad:</strong> Cardiología</p>
                <p><strong>Ubicación:</strong> Av. Reforma 14-20 zona 1, Torre Médica nivel 2 clínica 204</p>
                <p><strong>Contacto:</strong> 2244-1122/5566-3344</p>
                <a href="#" class="profile-link">Ver perfil &gt;</a>
            </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>