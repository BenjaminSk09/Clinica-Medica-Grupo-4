<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pagina de secretaria</title>
    <link href="<?= base_url('diseno_css/empleado/secretaria/plantilla_secretaria.css') ?>" rel="stylesheet">
    <!-- Incluimos Bootstrap para facilitar la creación de tablas y formularios -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Estructura general de la página con menú lateral -->
    <div class="container-fluid">
        <div class="row">
            <!-- Menú lateral -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Citas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Pacientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Medicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Áreas Médicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Usuarios</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <?= $this->renderSection('contenido') ?>

           
    <!-- Scripts de Bootstrap para asegurar que funcione el diseño responsivo -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>