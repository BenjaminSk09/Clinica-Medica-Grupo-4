<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?= $this->section('contenido') ?>
<div class="container mt-5">
    <h2>Registrar Nota Médica</h2>
    <form action="<?= base_url('detalle_citas/guardar_nota_medica') ?>" method="post">
        <input type="hidden" name="id_cita" value="<?= $id_cita ?>">
        <div class="mb-3">
            <label for="notas_medico" class="form-label">Nota Médica</label>
            <textarea class="form-control" id="notas_medico" name="notas_medico" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="<?= base_url('pacientes_atendidos') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?= $this->endSection() ?>
