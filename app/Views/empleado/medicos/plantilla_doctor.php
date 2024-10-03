<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Doctor</title>
    <link href="<?= base_url('diseno_css/empleado/medicos/plantilla_medico.css') ?>" rel="stylesheet">
    <script src="codigo_js/empleado/doctor/pagina_doctor.js"></script>
    <style>

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Barra superior -->
    <header>
        <div class="topbar">
            <div class="menu-icon">
                <img src="" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="<?=base_url('recetasDoctor')?>">Escribir recetas</a></li>
                    <li><a href="<?=base_url('historialPaciente')?>">Historial de Paciente</a></li>
                    <li><a href="<?=base_url('observaciones')?>">Agregar Observaciones</a></li>
                </ul>
            </nav>
            <div class="user-info">
                <span>pabito@gmail.com</span>
                <a href="#" class="logout">Salir</a>
            </div>
        </div>
    </header>
    <br>
    <!-- Contenido principal -->
    <main>
        <div class="calendar-header">
            <a href="" class="btn btn-primary logout">+ Paciente</a>
            <a href="" class="btn btn-primary logout">+ Cita</a>
        </div>
        <br>
        <div class="filters">
            <div class="dropdown">
                <label>Ver Citas por SALA</label>
                <select>
                    <option>Sala 1</option>
                    <option>Sala 2</option>
                </select>
            </div>

            <div class="dropdown">
                <label>Ver Citas por PROFESIONAL</label>
                <select>
                    <option>Doctor A</option>
                    <option>Doctor B</option>
                </select>
            </div>

            <div class="view-options">
                <button class="view-btn">Diaria</button>
                <button class="view-btn">Horaria</button>
                <button class="view-btn">Semanal</button>
                <button class="view-btn">Mensual</button>
            </div>
        </div>
        </div>
        <?= $this->renderSection('contenido') ?>
</body>

</html>