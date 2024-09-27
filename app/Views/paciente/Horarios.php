<?= $this->extend('paciente/plantilla_pacientes') ?>

<?=$this->section('contenido') ?>
<link href="<?= base_url('diseno_css/paciente/horarios.css') ?>" rel="stylesheet">
    <!-- Horarios-->

    <!-- Horario de Atención -->

    <div class="row justify-content-center horario-table">
        <div class="col-lg-8 col-md-10">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-primary">
                    <tr>
                        <th>Día</th>
                        <th>Horario de Atención</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lunes</td>
                        <td>8:00 AM - 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>8:00 AM - 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Miércoles</td>
                        <td>8:00 AM - 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        <td>8:00 AM - 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Viernes</td>
                        <td>8:00 AM - 5:00 PM</td>
                    </tr>
                    <tr>
                        <td>Sábado</td>
                        <td>9:00 AM - 1:00 PM</td>
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        <td>Cerrado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

<br>

<?= $this->endSection() ?>