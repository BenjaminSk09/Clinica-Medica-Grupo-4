<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil del Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-sm p-4 mb-5 bg-white rounded">
            <h2 class="text-center mb-4">Editar Perfil del Paciente</h2>

            <form action="<?= base_url('pacientes/actualizar_perfil') ?>" method="POST">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="hidden" name="id_paciente" value="<?= $paciente['id_paciente'] ?>">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $paciente['nombre'] ?>"
                        readonly>

                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"
                        value="<?= $paciente['apellido'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $paciente['email'] ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono"
                        value="<?= $paciente['telefono'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"
                        value="<?= $paciente['direccion'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                        value="<?= $paciente['fecha_nacimiento'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso (kg):</label>
                    <input type="number" step="0.01" class="form-control" id="peso" name="peso"
                        value="<?= $paciente['peso'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="altura" class="form-label">Altura (m):</label>
                    <input type="number" step="0.01" class="form-control" id="altura" name="altura"
                        value="<?= $paciente['altura'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="grupo_sanguineo" class="form-label">Grupo Sanguíneo:</label>
                    <select class="form-control" id="grupo_sanguineo" name="grupo_sanguineo" required>
                        <option value="A+" <?= $paciente['grupo_sanguineo'] == 'A+' ? 'selected' : '' ?>>A+</option>
                        <option value="A-" <?= $paciente['grupo_sanguineo'] == 'A-' ? 'selected' : '' ?>>A-</option>
                        <option value="B+" <?= $paciente['grupo_sanguineo'] == 'B+' ? 'selected' : '' ?>>B+</option>
                        <option value="B-" <?= $paciente['grupo_sanguineo'] == 'B-' ? 'selected' : '' ?>>B-</option>
                        <option value="AB+" <?= $paciente['grupo_sanguineo'] == 'AB+' ? 'selected' : '' ?>>AB+</option>
                        <option value="AB-" <?= $paciente['grupo_sanguineo'] == 'AB-' ? 'selected' : '' ?>>AB-</option>
                        <option value="O+" <?= $paciente['grupo_sanguineo'] == 'O+' ? 'selected' : '' ?>>O+</option>
                        <option value="O-" <?= $paciente['grupo_sanguineo'] == 'O-' ? 'selected' : '' ?>>O-</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_genero" class="form-label">Género:</label>
                    <select class="form-control" id="id_genero" name="id_genero" required>
                        <?php foreach ($generos as $generos): ?>
                            <option value="<?= $generos['id_genero'] ?>"
                                <?= $paciente['id_genero'] == $generos['id_genero'] ? 'selected' : '' ?>>
                                <?= $generos['nombre_genero'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="activo" class="form-label">Estado:</label>
                    <select class="form-control" id="activo" name="activo" required>
                        <option value="1" <?= $paciente['activo'] ? 'selected' : '' ?>>Activo</option>
                        <option value="0" <?= !$paciente['activo'] ? 'selected' : '' ?>>Inactivo</option>
                    </select>
                </div>


                <input type="hidden" name="id_paciente" value="<?= $paciente['id_paciente'] ?>">
                <!-- Otros campos del formulario aquí -->
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>