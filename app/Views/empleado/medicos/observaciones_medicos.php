<?= $this->extend('empleado/medicos/plantilla_doctor') ?>
<?=$this->section('contenido') ?>
<link href="<?= base_url('diseno_css/empleado/medicos/pagina_observaciones.css') ?>" rel="stylesheet">


    <!-- Formulario de Observaciones Médicas -->
    <main>
        <section class="observations-form">
            <h2>Registrar Observaciones</h2>
            <form>
                <div class="form-group">
                    <label for="patientName">Nombre del Paciente</label>
                    <input type="text" id="patientName" placeholder="Nombre del paciente" required>
                </div>

                <div class="form-group">
                    <label for="observationDate">Fecha de Observación</label>
                    <input type="date" id="observationDate" required>
                </div>

                <div class="form-group">
                    <label for="observationDetails">Detalles de la Observación</label>
                    <textarea id="observationDetails" placeholder="Escribe los detalles de la observación" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Guardar Observación</button>
            </form>
        </section>

        <!-- Lista de Observaciones -->
        <section class="observations-list">
            <h2>Observaciones Recientes</h2>
            <div class="observation-card">
                <h3>Juan Pérez</h3>
                <p><strong>Fecha:</strong> 01/10/2024</p>
                <p><strong>Observación:</strong> El paciente presenta síntomas leves de resfriado común.</p>
            </div>

            <div class="observation-card">
                <h3>María López</h3>
                <p><strong>Fecha:</strong> 28/09/2024</p>
                <p><strong>Observación:</strong> Se recomienda reposo por dolor de cabeza persistente.</p>
            </div>

            <!-- Más tarjetas de observación pueden añadirse aquí -->
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Clínica Médica. Todos los derechos reservados.</p>
    </footer>

<?= $this->endSection() ?>