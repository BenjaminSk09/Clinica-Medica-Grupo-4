<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Paciente - Citas Médicas</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    </header>

    <!-- Sección de Perfil del Paciente -->
    <div class="container mt-5">
        <h2 class="text-center">Perfil del Paciente</h2>
        <p class="text-center">Aquí puedes ver la información personal y médica del paciente.</p>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3><?= $paciente->nombre . ' ' . $paciente->apellido ?></h3>
                <p><strong>Correo:</strong> <?= $paciente->correo ?></p>
                <p><strong>Teléfono:</strong> <?= $paciente->telefono ?></p>
                <p><strong>Dirección:</strong> <?= $paciente->direccion ?></p>
                <p><strong>Fecha de Nacimiento:</strong> <?= $paciente->fecha_nacimiento ?></p>
                <p><strong>Peso:</strong> <?= $paciente->peso ?> kg</p>
                <p><strong>Altura:</strong> <?= $paciente->altura ?> cm</p>
                <p><strong>Grupo Sanguíneo:</strong> <?= $paciente->grupo_sanguineo ?></p>
                <p><strong>Género:</strong> <?= $paciente->genero ?></p>
                <p><strong>Estado:</strong> <?= $paciente->estado ? 'Activo' : 'Inactivo' ?></p>
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

