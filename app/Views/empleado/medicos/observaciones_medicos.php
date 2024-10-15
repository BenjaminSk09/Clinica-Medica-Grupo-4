<?= $this->extend('empleado/medicos/plantilla_doctor') ?>
<?=$this->section('contenido') ?>


<main class="container my-5">
    <!-- Formulario de Observaciones Médicas -->
    <section class="observations-form bg-white p-4 shadow-sm rounded">
        <h2 class="mb-4">Registrar Observaciones</h2>
        <form>
            <div class="mb-3">
                <label for="patientName" class="form-label">Nombre del Paciente</label>
                <input type="text" class="form-control" id="patientName" placeholder="Nombre del paciente" required>
            </div>

            <div class="mb-3">
                <label for="observationDate" class="form-label">Fecha de Observación</label>
                <input type="date" class="form-control" id="observationDate" required>
            </div>

            <div class="mb-3">
                <label for="observationDetails" class="form-label">Detalles de la Observación</label>
                <textarea class="form-control" id="observationDetails" placeholder="Escribe los detalles de la observación" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Guardar Observación</button>
        </form>
    </section>

    <!-- Lista de Observaciones -->
    <section class="observations-list bg-white p-4 shadow-sm rounded mt-5">
        <h2 class="mb-4">Observaciones Recientes</h2>
        <div class="observation-card p-3 mb-4 bg-light border-start border-4 border-primary">
            <h3>Juan Pérez</h3>
            <p><strong>Fecha:</strong> 01/10/2024</p>
            <p><strong>Observación:</strong> El paciente presenta síntomas leves de resfriado común.</p>
        </div>

        <div class="observation-card p-3 mb-4 bg-light border-start border-4 border-primary">
            <h3>María López</h3>
            <p><strong>Fecha:</strong> 28/09/2024</p>
            <p><strong>Observación:</strong> Se recomienda reposo por dolor de cabeza persistente.</p>
        </div>
    </section>
</main>



<?= $this->endSection() ?>