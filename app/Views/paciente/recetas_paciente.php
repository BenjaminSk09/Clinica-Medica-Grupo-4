<?= $this->extend('paciente/plantilla_vista_paciente') ?>

<?=$this->section('contenido') ?>

<link href="<?= base_url('diseno_css/paciente/recetas_medicas.css') ?>" rel="stylesheet">

<!-- Sección de Recetas Médicas -->
<div class="container my-5">
    <h2>Recetas Médicas</h2>
    <p>Aquí puedes ver las recetas que te ha prescrito tu médico.</p>

    <!-- Tabla de recetas -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Médico</th>
                <th>Medicamento</th>
                <th>Dosis</th>
                <th>Instrucciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí irían las recetas obtenidas desde la base de datos -->
            <tr>
                <td>01/09/2024</td>
                <td>Dr. López</td>
                <td>Ibuprofeno 400mg</td>
                <td>1 cada 8 horas</td>
                <td>Tomar después de las comidas</td>
                <td>

                </td>
            </tr>
            <!-- Más recetas -->
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>