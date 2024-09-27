<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Doctor</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
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
                <span>Menú</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Panel</a></li>
                    <li><a href="#">Pacientes</a></li>
                    <li><a href="#">Citas Calendario</a></li>
                    <li><a href="#">Facturas</a></li>
                    <li><a href="#">Listados</a></li>
                    <li><a href="#">Config. Clínica</a></li>
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
            <button class="btn">+<i class="bi bi-person-fill-add"></i> Paciente</button>
            <button class="btn">+ Cita</button>

            <div class="date-nav">
                <span>Lunes 28 sep 20</span>
                <span class="date">Martes 29 septiembre 2020</span>
                <button class="nav-btn">&lt;</button>
                <button class="nav-btn">&gt;</button>
                <span>Miércoles 30 sep 20</span>
            </div>

            <button class="btn">IR a HOY</button>
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

        <div class="appointment-list">
            <table>
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Dura</th>
                        <th>Sala</th>
                        <th>Paciente</th>
                        <th>Descripción</th>
                        <th>Profesional</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>09:30</td>
                        <td>15</td>
                        <td>Sala 1</td>
                        <td>FERNÁNDEZ DE FLORES, DIONIO</td>
                        <td>Ahora con Autoguardado</td>
                        <td>ANA CLETO</td>
                    </tr>
                    <tr>
                        <td>14:00</td>
                        <td>15</td>
                        <td>Sala 2</td>
                        <td>BREGUAL SIESTO, RAMIRO</td>
                        <td>ECOGRAFÍA TRANSVERSAL</td>
                        <td>ANEO PARIOLO</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>