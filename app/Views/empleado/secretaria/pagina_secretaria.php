<?= $this->extend('empleado/secretaria/plantilla_secretaria') ?>


<?=$this->section('contenido') ?>
    <link href="<?= base_url('diseno_css/empleado/secretaria/pagina_secretaria.css') ?>" rel="stylesheet">


            <!-- Contenido principal de la página -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h2>Citas</h2>

                <!-- Buscador de citas -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Palabra clave">
                    </div>
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
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary">Buscar</button>
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
<style>
    table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
}

thead {
    background-color: #f0f0f0;
}

/* Responsividad */
@media (max-width: 768px) {
    .topbar nav ul {
        flex-direction: column;
        gap: 5px;
    }

    .calendar-header {
        flex-direction: center;
        align-items: flex-start;
        gap: 15px;
    }

    .filters {
        flex-direction: column;
        gap: 15px;
    }

    .view-options {
        flex-direction: column;
        gap: 5px;
    }
}
</style>

<?= $this->endSection() ?>