<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Doctor</title>
    <link href="<?= base_url('diseno_css/empleado/medicos/pagina_doctor.css') ?>" rel="stylesheet">
    <link href="<?= base_url('codigo_js/empleado/doctor/pagina_doctor.js') ?>" rel="stylesheet">
    <script src="codigo_js/empleado/doctor/pagina_doctor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

</head>

<body>
    <header>
        <div class="hamburger" id="hamburger-icon">
            &#9776;
        </div>
        <nav class="side-menu" id="side-menu">
            <a href="#">Agregar </a>
            <a href="#">Ver Citas</a>
            <a href="#">Escribir recetas</a>
            <a href="#">Historial de Paciente</a>

        </nav>
    </header>

    <main id="main-content">
        <h1>¡Bienvenido!</h1>
        <p>Clinica Medica</p>
    </main>
    <br>
    <h1>Citas del Dia de Hoy:</h1>
    



    <script>
    // Obtener elementos del DOM
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const sideMenu = document.getElementById('side-menu');
    const mainContent = document.getElementById('main-content');

    // Variable para controlar si el menú está abierto o cerrado
    let menuOpen = false;

    // Evento click para el ícono de hamburguesa
    hamburgerIcon.addEventListener('click', function() {
        if (!menuOpen) {
            sideMenu.style.right = '0'; // Mostrar el menú
            mainContent.style.marginRight = '250px'; // Mover el contenido principal
            menuOpen = true;
        } else {
            sideMenu.style.right = '-250px'; // Ocultar el menú
            mainContent.style.marginRight = '0'; // Volver el contenido principal a su lugar
            menuOpen = false;
        }
    });
    </script>
    <!-- <script>
    // Envia una solicitud para cerrar sesión cuando el usuario navega hacia atrás
    window.addEventListener('unload', function(event) {
        navigator.sendBeacon('<?= base_url('/auth/logout') ?>');
    });
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>