<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Paciente - Citas Médicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/perfil_paciente.css') ?>" rel="stylesheet">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <img src="https://marketplace.canva.com/EAFdCebXgRs/1/0/1600w/canva-logotipo-medicina-simple-azul-y-blanco-4UzHG4FY3uw.jpg" alt="Logo Clínica Médica">
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
                        <a class="nav-link" href="<?= base_url('citas-medicas'); ?>">Citas Médicas</a>
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

    <!-- Sección de Perfil del Paciente -->
    <div class="container mt-5">
        <div class="card shadow-sm p-4 mb-5 bg-white rounded">
            <h2 class="text-center mb-4">Perfil del Paciente</h2>
            <p class="text-center text-muted mb-4">Aquí puedes ver y editar la información personal y médica del paciente.</p>

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3 class="text-primary"><?= $paciente->nombre . ' ' . $paciente->apellido ?></h3>
                    <!-- Campos informativos -->
                    <div class="mb-1">
                        <strong>Correo:</strong>
                        <span class="view-data"><?= $paciente->email ?></span>
                    </div>
                    <div class="mb-1">
                        <strong>Teléfono:</strong>
                        <span class="view-data"><?= $paciente->telefono ?></span>
                    </div>
                    <div class="mb-1">
                        <strong>Dirección:</strong>
                        <span class="view-data"><?= $paciente->direccion ?></span>
                    </div>
                    <div class="mb-1">
                        <strong>Peso:</strong>
                        <span class="view-data"><?= $paciente->peso ?> kg</span>
                    </div>
                    <div class="mb-1">
                        <strong>Estado:</strong>
                        <span class="view-data"><?= $paciente->activo ? 'Activo' : 'Inactivo' ?></span>
                    </div>
                    
                    <!-- Botón de redirección para actualizar información -->
                    <div class="text-center mt-4">
                        <a href="<?= base_url('pacientes/editar/' . $paciente->id_paciente) ?>" class="btn btn-primary">Editar Perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="mt-5">
        <p>© 2024 Clinica Medica | <a href="#">Política de Privacidad</a> | <a href="#">Términos de Servicio</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
