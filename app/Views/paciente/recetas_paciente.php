<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas Médicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/recetas_medicas.css')?>" rel="stylesheet">
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

    <!-- Navbar -->
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
                    <a class="nav-link" href="<?= base_url('paciente'); ?>">Portal del Paciente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('citas-medicas'); ?>">Citas Médicas</a>
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('paciente/1'); ?>">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Sección de Recetas Médicas -->
    <div class="container my-5">
        <h2>Recetas Médicas</h2>
        <p>Aquí puedes ver las recetas que te ha prescrito tu médico.</p>

        <!-- Tabla de recetas -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Médico</th>
                    <th>Medicamento</th>
                    <th>Dosis</th>
                    <th>Instrucciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí irían las recetas obtenidas desde la base de datos -->
                <tr>
                    <td>01/09/2024</td>
                    <td>Dr. López</td>
                    <td>Ibuprofeno 400mg</td>
                    <td>1 cada 8 horas</td>
                    <td>Tomar después de las comidas</td>
                    <td>

                    </td>
                </tr>
                <!-- Más recetas -->
            </tbody>
        </table>
    </div>

    <!-- Pie de página -->
    <footer class="text-center mt-5">
        <p>© 2024 Clinica Medica | <a href="#">Política de Privacidad</a> | <a href="#">Términos de Servicio</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
