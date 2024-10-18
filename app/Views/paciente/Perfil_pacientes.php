<?= $this->extend('paciente/plantilla_vista_paciente') ?>

<?=$this->section('contenido') ?>

<link href="<?= base_url('diseno_css/paciente/perfil_paciente.css') ?>" rel="stylesheet">


<!-- Sección de Perfil del Paciente -->
<div class="container mt-5">
    <div class="card shadow-sm p-4 mb-5 bg-white rounded">
        <h2 class="text-center mb-4">Perfil del Paciente</h2>
        <p class="text-center text-muted mb-4">Aquí puedes ver y editar la información personal y médica del paciente.
        </p>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3 class="text-primary"><?= $paciente->nombre . ' ' . $paciente->apellido ?></h3>
                <!-- Campos informativos -->
                <div class="mb-1">
                    <strong>Correo:</strong>
                    <span class="view-data"><?= $paciente->email ?></span>
                </div>
                <div class="mb-1">
                    <strong>Teléfono:</strong>
                    <span class="view-data"><?= $paciente->telefono ?></span>
                </div>
                <div class="mb-1">
                    <strong>Dirección:</strong>
                    <span class="view-data"><?= $paciente->direccion ?></span>
                </div>
                <div class="mb-1">
                    <strong>Peso:</strong>
                    <span class="view-data"><?= $paciente->peso ?> kg</span>
                </div>
                <div class="mb-1">
                    <strong>Estado:</strong>
                    <span class="view-data"><?= $paciente->activo ? 'Activo' : 'Inactivo' ?></span>
                </div>

                <div class="mb-1">
                    <strong>Fecha de Nacimiento: </strong>
                    <span class="view-data"><?= $paciente->fecha_nacimiento ?> </span>
                </div>  
                
                <div class="mb-1">
                    <strong>Altura: </strong>
                    <span class="view-data"><?= $paciente->altura ?> M </span>
                </div>  

                <div class="mb-1">
                    <strong>Grupo Sanguineo: </strong>
                    <span class="view-data"><?= $paciente->grupo_sanguineo ?>  </span>
                </div>  


                <!-- Botón de redirección para actualizar información -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('pacientes/editar/' . $paciente->id_paciente) ?>"
                        class="btn btn-primary">Editar Perfil</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>