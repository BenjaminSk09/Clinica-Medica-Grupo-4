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
<script src="codigo_js/paciente/paciente.js"></script>


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
                        <a class="nav-link" href="/"><span class="hover-effect">Sobre Nosotros</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Médicos</a>
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
    <!--Especialidades -->
    <div class="especialidades">
        <div class="container">
            <!-- Filtros -->
            <div class="filters">
                <h3>Filtros</h3>
                <input type="text" placeholder="Nombre">
                <select>
                    <option>Ginecología y Obstetricia</option>
                    <option>Cardiología</option>
                    <option>Neurología</option>
                </select>
                <select>
                    <option>Titular/Cortesía</option>
                    <option>Especialista</option>
                    <option>Residente</option>
                </select>
                <select>
                    <option>Aseguradora</option>
                    <option>Aseguradora A</option>
                    <option>Aseguradora B</option>
                </select>
                <button class="btn-search">Realizar búsqueda</button>
                <button class="btn-clear">Limpiar</button>
            </div>

            <!-- Tarjeta de Doctor -->
            <div class="doctor-card">
                <img src="doctor1.jpg" alt="Foto del Doctor">
                <div class="doctor-info">
                    <h2>Abner Gamaliel Santos López</h2>
                    <p><strong>Cortesía</strong></p>
                    <p><strong>Especialidad:</strong> Ginecología y Obstetricia, Urología Ginecológica</p>
                    <p><strong>Ubicación:</strong> 6ta av. 9-18 zona 10, edif. Sixtino II ala II nivel 9 clínica 901</p>
                    <p><strong>Contacto:</strong> 2369-4148/5592-3789</p>
                    <a href="#" class="profile-link">Ver perfil &gt;</a>
                </div>
            </div>

            <!-- Tarjeta de Doctor adicional (Ejemplo) -->
            <div class="doctor-card">
                <img src="doctor2.jpg" alt="Foto de la Doctora">
                <div class="doctor-info">
                    <h2>Aida Maritza Ramírez Ortiz</h2>
                    <p><strong>Titular</strong></p>
                    <p><strong>Especialidad:</strong> Cardiología</p>
                    <p><strong>Ubicación:</strong> Av. Reforma 14-20 zona 1, Torre Médica nivel 2 clínica 204</p>
                    <p><strong>Contacto:</strong> 2244-1122/5566-3344</p>
                    <a href="#" class="profile-link">Ver perfil &gt;</a>
                </div>
            </div>

            <!-- Agrega más tarjetas de doctores según sea necesario -->
        </div>
    </div>

    <div class="valores-container">
        <h1>Nuestros valores</h1>
        <div class="tabs">
            <!-- Botones para cambiar el contenido de los valores -->
            <button class="tab active" onclick="showValue('respeto')">Respeto</button>
            <button class="tab" onclick="showValue('compromiso')">Compromiso</button>
            <button class="tab" onclick="showValue('integridad')">Integridad</button>
            <button class="tab" onclick="showValue('trabajo')">Trabajo en equipo</button>
            <button class="tab" onclick="showValue('innovacion')">Innovación</button>
        </div>

        <div class="values-content">
            <!-- Contenido de Respeto -->
            <div class="value" id="respeto">
                <div class="value-icon" style="background-color: #20c997;">
                    <!-- Imagen de icono de Respeto -->
                    <img src="respeto-icon.png" alt="Respeto">
                </div>
                <div class="value-description">
                    <h3>Respeto</h3>
                    <p>Trato de manera digna a todas las personas.</p>
                </div>
            </div>

            <!-- Contenido de Compromiso -->
            <div class="value" id="compromiso" style="display: none;">
                <div class="value-icon" style="background-color: #007bff;">
                    <img src="compromiso-icon.png" alt="Compromiso">
                </div>
                <div class="value-description">
                    <h3>Compromiso</h3>
                    <p>Compromiso con la calidad y la atención al paciente.</p>
                </div>
            </div>

            <!-- Contenido de Integridad -->
            <div class="value" id="integridad" style="display: none;">
                <div class="value-icon" style="background-color: #ffc107;">
                    <img src="integridad-icon.png" alt="Integridad">
                </div>
                <div class="value-description">
                    <h3>Integridad</h3>
                    <p>Honestidad y ética en cada acción.</p>
                </div>
            </div>

            <!-- Contenido de Trabajo en equipo -->
            <div class="value" id="trabajo" style="display: none;">
                <div class="value-icon" style="background-color: #17a2b8;">
                    <img src="trabajo-icon.png" alt="Trabajo en equipo">
                </div>
                <div class="value-description">
                    <h3>Trabajo en equipo</h3>
                    <p>Colaboración y esfuerzo compartido para alcanzar objetivos comunes.</p>
                </div>
            </div>

            <!-- Contenido de Innovación -->
            <div class="value" id="innovacion" style="display: none;">
                <div class="value-icon" style="background-color: #e83e8c;">
                    <img src="innovacion-icon.png" alt="Innovación">
                </div>
                <div class="value-description">
                    <h3>Innovación</h3>
                    <p>Búsqueda constante de mejoras y nuevas soluciones.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>