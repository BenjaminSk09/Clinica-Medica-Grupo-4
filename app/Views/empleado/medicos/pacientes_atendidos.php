<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?= $this->section('contenido') ?>
<link href="<?= base_url('diseno_css/empleado/medicos/pagina_doctor.css') ?>" rel="stylesheet">
<script src="codigo_js/empleado/doctor/pagina_doctor.js"></script>

<h2 class="text-center">Citas Pendientes</h2>
<div class="appointment-list mt-4">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>Paciente</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Motivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($citas)) : ?>
                <?php foreach ($citas as $cita) : ?>
                    <tr>
                        <td><?= esc($cita['nombre_paciente']) ?></td>
                        <td><?= esc($cita['fecha_cita']) ?></td>
                        <td><?= esc($cita['hora']) ?></td>
                        <td><?= esc($cita['motivo_cita']) ?></td>
                        <td>
                            <form method="POST" action="<?= base_url('doctor/recibir_paciente') ?>">
                                <input type="hidden" name="id_cita" value="<?= esc($cita['id']) ?>">
                                <button type="submit" class="btn btn-primary btn-sm">Recibido</button>
                            </form>
                            <a href="#" class="btn btn-info btn-sm">Ver Detalles</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5" class="text-center">No hay citas pendientes</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<?= $this->endSection() ?>
