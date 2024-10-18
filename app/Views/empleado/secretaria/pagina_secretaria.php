<?= $this->extend('empleado/secretaria/plantilla_secretaria') ?>


<?=$this->section('contenido') ?>
<link href="<?= base_url('diseno_css/empleado/secretaria/pagina_secretaria.css') ?>" rel="stylesheet">

<!-- Contenido principal de la página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 position-absolute top-50 start-50 translate-middle">
    
<h1 class="text-center text-black">Citas del Día</h1>

    <!-- Buscador de citas -->
    <div class="row mb-3">
        <div class="col-md-3">
            <select class="form-control">
                <option>PACIENTE</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-control">
                <option>MEDICO</option>
            </select>
        </div>
        <div class="col-md-3">
            <input type="date" class="form-control">
        </div>
        <div class="col-md-3">
            <select class="form-control">
            <option>Especialidad</option>
            </select>
        </div>
        
    </div>
    <!-- Tabla de citas médicas -->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Asunto</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de citas en la tabla -->
            <tr>
                <td>Control de Enfermedad</td>
                <td>Leonardo Ramos</td>
                <td>Jennifer Janice Ramos</td>
                <td>2015-08-11 10:00</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Halitosis</td>
                <td>Daniel Leyva</td>
                <td>Jennifer Janice Leyva</td>
                <td>2015-08-11 10:00</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Revisión de Gingivitis</td>
                <td>Williams Cordova</td>
                <td>Agustín Cordova</td>
                <td>2015-08-13 13:00</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>Revisión de Caries</td>
                <td>Diógenes Jimenez</td>
                <td>Airan Jimenez</td>
                <td>2015-08-15 12:00</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</main>
</div>
</div>

<?= $this->endSection() ?>