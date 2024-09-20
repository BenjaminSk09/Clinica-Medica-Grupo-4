<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal del Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/vista_inicio.css')?>" rel="stylesheet">
</head>

<body>
     <!-- Encabezado -->
     <header>
        <div class="logo">
            <img src="https://marketplace.canva.com/EAFdCebXgRs/1/0/1600w/canva-logotipo-medicina-simple-azul-y-blanco-4UzHG4FY3uw.jpg"
                alt="Logo Clínica Médica">
            <div>
                <h1>Portal del Paciente</h1>
                <p>Clinica Medica</p>
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
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/'); ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('citas-medicas'); ?>">Citas Medicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis Resultados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Historia Clínica</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('recetas'); ?>">Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de Bienvenida -->
    <div class="bienvenida">
        <h2>Bienvenido al Portal del Paciente</h2>
        <p>Accede a tus citas, resultados médicos y más desde la comodidad de tu hogar.</p>
    </div>

    <!-- Servicios para Pacientes -->
    <div class="servicios-pacientes">
        <div class="servicio">
            <img src="https://cdn-icons-png.flaticon.com/512/3209/3209765.png" alt="Citas Médicas">
            <h3>Citas Médicas</h3>
            <p>Programa y gestiona tus citas médicas de forma rápida y sencilla.</p>
            <br>
            <a class="btn btn-primary" href="<?= base_url('citas-medicas'); ?>">Ingresar</a>
        </div>
        <div class="servicio">
            <img src="https://cdn-icons-png.flaticon.com/512/3039/3039473.png" alt="Resultados de Exámenes">
            <h3>Resultados de Exámenes</h3>
            <p>Consulta tus resultados de laboratorio y estudios clínicos en línea.</p>
            <br>
            <button type="button" class="btn btn-dark">Ingresar</button>
        </div>
        <div class="servicio">
            <img src="https://cdn-icons-png.flaticon.com/512/1256/1256656.png" alt="Historia Clínica">
            <h3>Historia Clínica</h3>
            <p>Accede a tu historial médico completo desde cualquier lugar.</p>
            <br>
            <button type="button" class="btn btn-dark">Ingresar</button>
        </div>
        <div class="servicio">
            <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="Recetas">
            <h3>Recetas Médicas</h3>
            <p>Revisa tus recetas y solicita renovaciones en línea.</p>
            <br>
            <a class="btn btn-primary" href="<?= base_url('recetas'); ?>">Ingresar</a>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        <p>© 2024 Clinica Medica | <a href="#">Política de Privacidad</a> | <a href="#">Términos de Servicio</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>