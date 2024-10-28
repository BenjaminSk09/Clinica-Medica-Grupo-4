<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?= $this->section('contenido') ?>
<h2 class="text-center">Ingresar Receta</h2>

<form action="<?= base_url('detalle_citas/guardar_receta') ?>" method="POST">
    <input type="hidden" name="id_cita" value="<?= esc($id_cita) ?>">
    
    <div class="form-group">
        <label for="receta">Receta</label>
        <textarea class="form-control" id="receta" name="receta" rows="4" placeholder="Escribe la receta aquí" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Guardar Receta</button>
</form>

<?= $this->endSection() ?>
