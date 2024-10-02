<?= $this->extend('paciente/plantilla_pacientes') ?>

<?=$this->section('contenido') ?>
<!--Contactanos-->
<!--Contactanos-->
<link href="<?= base_url('diseno_css/paciente/contactanos.css') ?>" rel="stylesheet">

<?php   
        foreach($datos as $clinicas):
    ?>
<div class="contact-container text-black">
    <div class="contact-info">
        <h2>Contáctanos</h2>
        <p><strong>Dirección:</strong></p>
        <p><?php echo $clinicas['direccion'];?></p>
        <p><i class="fas fa-phone"></i> <strong>Teléfono:</strong><br> <?php echo $clinicas['telefono']; ?></p>
        <p><strong>Email:</strong></p>
        <p><?php echo $clinicas['email']; ?></p>
    </div>
    <div class="contact-form">
        <form action="" method="POST">
            <label for="name">Nombre <span></span></label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email <span></span></label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Asunto <span></span></label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
   
</div>
<?php
        endforeach;
    ?>
<br>
<?= $this->endSection() ?>