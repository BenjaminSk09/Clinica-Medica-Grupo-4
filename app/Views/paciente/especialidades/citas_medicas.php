<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal del Paciente - Citas Médicas</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/citas_medicas.css')?>" rel="stylesheet">
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
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Citas Médicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis Resultados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Historia Clínica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de Citas Médicas -->
    <div class="container mt-5">
        <h2 class="text-center">Gestiona tus Citas Médicas</h2>
        <p class="text-center">Aquí puedes revisar, programar o cancelar tus citas médicas.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h3>Próximas Citas</h3>
                <ul class="list-group">
                    <li class="list-group-item">Consulta con el Dr. López - 20/09/2024 - 10:00 AM</li>
                    <li class="list-group-item">Examen de Laboratorio - 25/09/2024 - 8:30 AM</li>
                    <li class="list-group-item">Consulta de Control - 30/09/2024 - 12:00 PM</li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3>Programar Nueva Cita</h3>
                <form action="<?= base_url('/citas/programar') ?>" method="post">
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha de la Cita</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="form-label">Hora de la Cita</label>
                        <input type="time" class="form-control" id="hora" name="hora" required>
                    </div>
                    <div class="mb-3">
                        <label for="doctor" class="form-label">Selecciona el Doctor</label>
                        <select class="form-select" id="doctor" name="doctor" required>
                            <option value="Dr. López">Dr. López</option>
                            <option value="Dra. Pérez">Dra. Pérez</option>
                            <option value="Dr. García">Dr. García</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Programar Cita</button>
                </form>
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
