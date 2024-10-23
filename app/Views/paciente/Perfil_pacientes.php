<?= $this->extend('paciente/plantilla_vista_paciente') ?>

<?=$this->section('contenido') ?>

<link href="<?= base_url('diseno_css/paciente/perfil_paciente.css') ?>" rel="stylesheet">


<!-- Sección de Perfil del Paciente -->
<!-- Sección de Perfil del Paciente -->
<div class="container mt-5">
    <div class="card shadow p-4 mb-5 bg-light rounded">
        <h2 class="text-center mb-4 text-secondary">Perfil del Paciente</h2>
        <p class="text-center text-muted mb-4">Aquí puedes ver y editar la información personal y médica del paciente.</p>

        <div class="row">
            <!-- Imagen del Paciente -->
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/150" alt="Imagen del Paciente" class="img-fluid rounded-circle mb-3">
                <h4 class="text-primary"><?= $paciente->nombre . ' ' . $paciente->apellido ?></h4>
            </div>
            
            <!-- Información del Paciente -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Correo:</strong>
                        <span class="view-data"><?= $paciente->email ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Teléfono:</strong>
                        <span class="view-data"><?= $paciente->telefono ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Dirección:</strong>
                        <span class="view-data"><?= $paciente->direccion ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Peso:</strong>
                        <span class="view-data"><?= $paciente->peso ?> kg</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Estado:</strong>
                        <span class="view-data"><?= $paciente->activo ? 'Activo' : 'Inactivo' ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Fecha de Nacimiento:</strong>
                        <span class="view-data"><?= $paciente->fecha_nacimiento ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Altura:</strong>
                        <span class="view-data"><?= $paciente->altura ?> M</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Grupo Sanguíneo:</strong>
                        <span class="view-data"><?= $paciente->grupo_sanguineo ?></span>
                    </div>
                </div>

                <!-- Botón de redirección para actualizar información -->
                <div class="text-center mt-4">
                    <a href="<?= base_url('pacientes/editar/' . $paciente->id_paciente) ?>" class="btn btn-primary btn-lg">Editar Perfil</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>