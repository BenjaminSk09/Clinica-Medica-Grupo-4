<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Doctor</title>
    <link href="<?= base_url('diseno_css/empleado/medicos/plantilla_medico.css') ?>" rel="stylesheet">
    <script src="codigo_js/empleado/doctor/pagina_doctor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Barra superior -->
    <header class="bg-primary text-white py-2">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="logo d-flex align-items-center">
                <a href="pagina_doctor">
                    <img src="https://marketplace.canva.com/EAFdCebXgRs/1/0/1600w/canva-logotipo-medicina-simple-azul-y-blanco-4UzHG4FY3uw.jpg"
                        alt="Logo" class="me-2" style="width: 100px; height: 100px;">
                </a>
                <h1 class="h4 m-0"> <a href=""></a>Clinica Doctor</h1>
            </div>
            <nav class="d-flex">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="<?=base_url('recetasDoctor')?>" class="nav-link text-white">Escribir recetas</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('historialPaciente')?>" class="nav-link text-white">Historial de
                            Paciente</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('observaciones')?>" class="nav-link text-white">Agregar Observaciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('logout')?>" class="nav-link text-white">Cerrar sesión</a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>

   

        <?= $this->renderSection('contenido') ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>