<?= $this->extend('paciente/plantilla_vista_paciente') ?>

<?=$this->section('contenido') ?>

<link href="<?= base_url('diseno_css/paciente/citas_medicas.css') ?>" rel="stylesheet">

<!-- Sección de Citas Médicas -->
<div class="container mt-5">
    <h2 class="text-center">Gestiona tus Citas Médicas</h2>
    <p class="text-center">Aquí puedes revisar, programar o cancelar tus citas médicas.</p>

    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center">Tus Citas Médicas</h2>
            <ul class="list-group">
                <?php if(!empty($citas)): ?>
                    <?php foreach($citas as $cita): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Consulta con el Dr. <?= esc($cita['id_medico']) ?> - <?= esc($cita['fecha_cita']) ?> - <?= esc($cita['hora']) ?>
                            
                            <!-- Formulario para eliminar la cita -->
                            <form action="<?= base_url('paciente/citas/eliminar') ?>" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta cita?');">
                                <input type="hidden" name="id_cita" value="<?= esc($cita['id_cita']) ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="list-group-item">No tienes citas programadas.</li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="col-md-6">
            <h3>Programar Nueva Cita</h3>

            <!-- Mostrar errores de validación si existen -->
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('paciente/citas/programar') ?>" method="post">
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha de la Cita</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
                <div class="mb-3">
                    <label for="hora" class="form-label">Hora de la Cita</label>
                    <input type="time" class="form-control" id="hora" name="hora" required>
                </div>
                <div class="mb-3">
                    <label for="doctor" class="form-label">Selecciona el Doctor</label>
                    <select class="form-select" id="doctor" name="doctor" required>
                        <?php foreach($medicos as $medico): ?>
                            <option value="<?= esc($medico['id_medico']) ?>">Dr./Dra. <?= esc($medico['id_empleado']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Programar Cita</button>
            </form>
        </div>
    </div>
</div>


    <?= $this->endSection() ?>