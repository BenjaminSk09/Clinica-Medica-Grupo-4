<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?=$this->section('contenido') ?>
<link href="<?= base_url('diseno_css/empleado/medicos/pagina_doctor.css') ?>" rel="stylesheet">
<script src="codigo_js/empleado/doctor/pagina_doctor.js"></script>
<h1 class="text text-center">VER CITAS DEL DÍA DE HOY:</h1>
<div class="appointment-list">
    <table>
        <thead>
            <tr>
                <th>Hora</th>
                <th>Dura</th>
                <th>Sala</th>
                <th>Paciente</th>
                <th>Descripción</th>
                <th>Profesional</th>
                <th>Estado de la cita</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>09:30</td>
                <td>15</td>
                <td>Sala 1</td>
                <td>FERNÁNDEZ DE FLORES, DIONIO</td>
                <td>Ahora con Autoguardado</td>
                <td>ANA CLETO</td>
                <td> <button type="button" class="btn btn-success">Cita termincada</button></td>
            </tr>
            <tr>
                <td>14:00</td>
                <td>15</td>
                <td>Sala 2</td>
                <td>BREGUAL SIESTO, RAMIRO</td>
                <td>ECOGRAFÍA TRANSVERSAL</td>
                <td>ANEO PARIOLO</td>
                <td> <button type="button" class="btn btn-success">Cita termincada</button></td>
            </tr>
            <tr>

            </tr>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<?= $this->endSection() ?>