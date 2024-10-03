<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?=$this->section('contenido') ?>
<link href="<?= base_url('diseno_css/empleado/medicos/recetas_medicos.css') ?>" rel="stylesheet">


<!-- Header -->
<header>
    <div class="logo">
        <h1>Clinica Medica</h1>
    </div>

</header>

<!-- Contenido Principal -->
<main>
    <section class="recipe-section">
        <h2>Crear Nueva Receta</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="patient">Paciente:</label>
                <input type="text" id="patient" name="patient" placeholder="Nombre del paciente" required>
            </div>

            <div class="form-group">
                <label for="diagnosis">Diagnóstico:</label>
                <textarea id="diagnosis" name="diagnosis" placeholder="Escribe el diagnóstico" rows="3"
                    required></textarea>
            </div>

            <div class="form-group">
                <label for="medication">Medicamentos:</label>
                <textarea id="medication" name="medication" placeholder="Escribe los medicamentos" rows="3"
                    required></textarea>
            </div>

            <div class="form-group">
                <label for="instructions">Instrucciones:</label>
                <textarea id="instructions" name="instructions" placeholder="Instrucciones para el paciente" rows="3"
                    required></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Guardar Receta</button>
            </div>
        </form>
    </section>
</main>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Doctor Online. Todos los derechos reservados.</p>
</footer>
<?= $this->endSection() ?>