<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('diseno_css/paciente/contactanos.css') ?>" rel="stylesheet"> 
</head>

<body>
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <a href=""> <img src="imagenes/paciente/Logo.png" alt="Logo Clínica Médica">
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
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-underline">
                    <li class="nav-item">
                        <a class="nav-link" href="Horarios"><span class="hover-effect">Horarios</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Nosotros"><span class="hover-effect">Sobre Nosotros</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Medicos"><span class="hover-effect">Médicos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ubicacion"><span class="hover-effect">Ubicación</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactanos"><span class="hover-effect">Contáctanos</span></a>
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
    <br>

    <!--Contactanos-->
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contáctanos</h2>
            <p><strong>Dirección:</strong></p>
            <p>1ª. Avenida 5-67, zona 2, Aldea Boca del Monte, del Municipio de Villa Canales del Departamento de
                Guatemala.</p>
            <p><i class="fas fa-phone"></i> <strong>Teléfono:</strong><br> (502) 2442-8017</p>
        </div>
        <div class="contact-form">
            <form action="" method="POST">
                <label for="name">Nombre <span>*</span></label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email <span>*</span></label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Asunto <span>*</span></label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5"></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>


    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f8f8f8;
        padding: 20px;
    }

    .contact-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-info {
        flex: 1;
        margin-right: 20px;
    }

    .contact-info h2 {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .contact-info p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .contact-info i {
        font-size: 16px;
        margin-right: 5px;
    }

    .contact-form {
        flex: 1;
        margin-left: 20px;
    }

    .contact-form form {
        display: flex;
        flex-direction: column;
    }

    .contact-form label {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .contact-form input,
    .contact-form textarea {
        font-size: 14px;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
    }

    .contact-form button {
        background-color: #f4f4f4;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
        background-color: #ddd;
    }

    @media (max-width: 768px) {
        .contact-container {
            flex-direction: column;
        }

        .contact-info,
        .contact-form {
            margin: 0;
            padding: 0;
        }

        .contact-form {
            margin-top: 20px;
        }
    }
     
    

    </style>

    <br> 
      <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Institucional -->
                <div class="col-md-4">
                    <h5>INSTITUCIONAL</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Horarios de atención</a></li>
                        <li><a href="#">Coberturas que atendemos</a></li>
                        <li><a href="#">Credencial de servicios SAAV</a></li>
                        <li><a href="#">Reservar turnos</a></li>
                        <li><a href="#">Cómo llegar</a></li>
                    </ul>
                </div>

                <!-- Contáctenos -->
                <div class="col-md-4">
                    <h5>CONTÁCTENOS</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Consultas y sugerencias</a></li>
                        <li><a href="#">Trabaje con nostros</a></li>
                        <li><a href="#">Profesionales de la salud</a></li>
                        <li><a href="#">Agente propaganda pagada</a></li>
                        <li><a href="#">Formulario de solicitud</a></li>
                    </ul>
                </div>

                <!-- Información de Interés -->
                <div class="col-md-4">
                    <h5>INFORMACIÓN DE INTERÉS</h5>
                    <ul class="list-unstyled">
                        <li>Plasma rico en plaquetas</li>
                        <li><a href="#"> Vacunación antigripal
                                2024</a></li>
                        <li><a href="#"> Prevención del dengue</a></li>
                        <li><a href="#"> Acumputura</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="row mt-4">
                <div class="col text-center">
                    <p>Todos los derechos reservados ® | República de Guatemala| Clinica Medica</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>