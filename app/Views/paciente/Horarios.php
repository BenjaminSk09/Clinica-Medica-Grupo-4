<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Médica</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="<?= base_url('diseno_css/paciente/horarios.css') ?>" rel="stylesheet">



</head>

<body>


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


    <!-- Horarios-->
  
    <!-- Horario de Atención -->
    
        <div class="row justify-content-center horario-table">
            <div class="col-lg-8 col-md-10">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Día</th>
                            <th>Horario de Atención</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes</td>
                            <td>8:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Martes</td>
                            <td>8:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Miércoles</td>
                            <td>8:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Jueves</td>
                            <td>8:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Viernes</td>
                            <td>8:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>9:00 AM - 1:00 PM</td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td>Cerrado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>