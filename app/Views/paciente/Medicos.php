<?= $this->extend('paciente/plantilla_pacientes') ?>

<?=$this->section('contenido') ?>
    <br>
    <!-- Tarjeta de Doctor -->
    <?php
        foreach($datos as $doctor): 
            
    
    
    ?>

    <div class="doctor1">
        <div class="doctor-card">
            <img src="https://studikard.com/wp-content/uploads/2021/02/doctor-perfil.jpg"
                alt="Foto del Doctor">
            <h2><?=$doctor['nombre']." ".$doctor['apellido'];?></h2>
            <div class="doctor-info">
                <p><strong>Especialidad:</strong> </p>
                <p><strong>Contacto:</strong> <?=$doctor['telefono'] ?></p>
                <a href="Contactanos" class="profile-link">Agendar cita &gt;</a>
            </div>
        </div>
        <!-- Agrega más tarjetas de doctores según sea necesario -->
    </div>
    <?php
        endforeach; 
    ?>

<?= $this->endSection() ?>
