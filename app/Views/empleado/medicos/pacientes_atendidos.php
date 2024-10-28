<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?= $this->section('contenido') ?>
<link href="<?= base_url('diseno_css/empleado/medicos/pagina_doctor.css') ?>" rel="stylesheet">
<script src="codigo_js/empleado/doctor/pagina_doctor.js"></script>
<body>
<div class="container">
    <h2 class="text-center">Pacientes Atendidos</h2>

    <!-- Botones de Tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="recientes-tab" data-bs-toggle="tab" data-bs-target="#recientes" type="button" role="tab" aria-controls="recientes" aria-selected="true">Pacientes Recientes</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="anteriores-tab" data-bs-toggle="tab" data-bs-target="#anteriores" type="button" role="tab" aria-controls="anteriores" aria-selected="false">Citas Anteriores</button>
      </li>
    </ul>

    <div class="tab-content mt-4" id="myTabContent">
      <!-- Tab de Pacientes Recientes -->
      <div class="tab-pane fade show active" id="recientes" role="tabpanel" aria-labelledby="recientes-tab">
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
              <?php if (!empty($recientes)) : ?>
                  <?php foreach ($recientes as $cita) : ?>
                      <tr>
                          <td><?= esc($cita['nombre_paciente']) ?></td>
                          <td><?= esc($cita['fecha_cita']) ?></td>
                          <td><?= esc($cita['hora']) ?></td>
                          <td><?= esc($cita['motivo_cita']) ?></td>
                          <td>
                            <!-- Botón de "Receta" -->
                            <a href="<?= base_url('detalle_citas/formulario_receta/' . $cita['id_cita']) ?>" 
                               class="btn btn-danger btn-sm">Receta</a>
                            <!-- Botones para las futuras implementaciones de Tratamiento y Nota Médica -->
                            <a href="<?= base_url('detalle_citas/formulario_tratamiento/' . $cita['id_cita']) ?>" 
                               class="btn btn-success btn-sm">Tratamiento</a>
                            <a href="<?= base_url('detalle_citas/formulario_nota_medica/' . $cita['id_cita']) ?>" 
                               class="btn btn-warning btn-sm">Nota Médica</a>
                        </td>
                      </tr>
                  <?php endforeach; ?>
              <?php else : ?>
                  <tr>
                      <td colspan="5" class="text-center">No hay pacientes recientes</td>
                  </tr>
              <?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Tab de Citas Anteriores -->
      <div class="tab-pane fade" id="anteriores" role="tabpanel" aria-labelledby="anteriores-tab">
        <table class="table table-hover">
          <thead class="table-dark">
              <tr>
                  <th>Paciente</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Motivo</th>
              </tr>
          </thead>
          <tbody>
              <?php if (!empty($anteriores)) : ?>
                  <?php foreach ($anteriores as $cita) : ?>
                      <tr>
                          <td><?= esc($cita['nombre_paciente']) ?></td>
                          <td><?= esc($cita['fecha_cita']) ?></td>
                          <td><?= esc($cita['hora']) ?></td>
                          <td><?= esc($cita['motivo_cita']) ?></td>
                      </tr>
                  <?php endforeach; ?>
              <?php else : ?>
                  <tr>
                      <td colspan="4" class="text-center">No hay citas anteriores</td>
                  </tr>
              <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<?= $this->endSection() ?>
