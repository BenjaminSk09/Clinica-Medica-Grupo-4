<?= $this->extend('paciente/plantilla_pacientes') ?>

<?=$this->section('contenido') ?>
<link href="<?= base_url('diseno_css/paciente/medicos.css') ?>" rel="stylesheet">
<!-- Tarjeta de Doctor -->

<div class="container my-4">
    <div class="row">
        <?php foreach($datos as $doctor): ?>
        <div class="col-md-6 mb-4">
            <div class="card doctor-card shadow-sm d-flex flex-row align-items-center p-3">
                <img src="https://studikard.com/wp-content/uploads/2021/02/doctor-perfil.jpg" class="img-fluid rounded"
                    alt="Foto del Doctor" style="width: 150px; height: 150px; object-fit: cover;">
                <div class="doctor-info ms-3">
                    <h5 class="card-title"><?=$doctor['nombre']." ".$doctor['apellido'];?></h5>
                    <p class="card-text"><strong>Especialidad:</strong></p>
                    <p class="card-text"><strong>Contacto:</strong> <?=$doctor['telefono'] ?></p>
                    <a href="home_reservas" class="profile-link text-success fw-bold">Agendar cita &gt;</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection() ?>