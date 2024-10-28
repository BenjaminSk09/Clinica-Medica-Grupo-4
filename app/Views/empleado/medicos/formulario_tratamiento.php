<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?= $this->section('contenido') ?>
<div class="container mt-5">
    <h2>Registrar Tratamiento</h2>
    <form action="<?= base_url('detalle_citas/guardar_tratamiento') ?>" method="post">
        <input type="hidden" name="id_cita" value="<?= $id_cita ?>">
        <div class="mb-3">
            <label for="tratamiento" class="form-label">Tratamiento</label>
            <textarea class="form-control" id="tratamiento" name="tratamiento" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="<?= base_url('pacientes_atendidos') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
