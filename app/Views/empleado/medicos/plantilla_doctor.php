<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Doctor</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <link href="<?= base_url('diseno_css/empleado/medicos/plantilla_medico.css') ?>" rel="stylesheet">
    <script src="codigo_js/empleado/doctor/pagina_doctor.js"></script>
    <style>

    </style>
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
                    <li><a href="#">Ver citas</a></li>
                    <li><a href="<?=base_url('recetasDoctor')?>">Escribir recetas</a></li>
                    <li><a href="<?=base_url('')?>">Historial de Paciente</a></li>
                    <li><a href="<?=base_url('#')?>">Agregar Observaciones</a></li>
                </ul>
            </nav>
            <div class="user-info">
                <span>pabito@gmail.com</span>
                <a href="#" class="logout">Salir</a>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main>
        <div class="calendar-header">
            <a href="" class="btn btn-primary logout">+ Paciente</a> 
            <a href="" class="btn btn-primary logout">+ Cita</a> 
        </div>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
</body>

</html>