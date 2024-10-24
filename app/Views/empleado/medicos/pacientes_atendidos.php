
<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?=$this->section('contenido') ?>

<div class="container my-5">
    <h1 class="text-center">Pacientes atendidos</h1>

    <div class="d-flex justify-content-center my-4">
      <button class="btn btn-primary mx-2">Pacientes Recientes</button>
      <button class="btn btn-primary mx-2">Citas Anteriores</button>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-bordered">
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
          <tr>
            <td>Lucía López</td>
            <td>2024-09-11</td>
            <td>11:00</td>
            <td>Revisión médica</td>
            <td><button class="btn btn-primary">Recibido</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



<?= $this->endSection() ?>