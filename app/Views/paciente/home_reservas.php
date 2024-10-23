<?= $this->extend('paciente/plantilla_pacientes') ?>

<?= $this->section('contenido') ?>
<!--para hacer reservas desde home sin cuenta-->
<!--Contactanos-->
<link href="<?= base_url('diseno_css/paciente/home_reservas.css') ?>" rel="stylesheet">

<div class="container reservas-container text-black">
    <div class="row">
        <div class="col-md-6 reservas-info">
            <h2>Contáctanos</h2>
            <p><strong>Dirección:</strong></p>

            <!-- Menú desplegable con todas las direcciones -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown-button">
                    Selecciona una clínica
                </button>
                <ul class="dropdown-menu" id="clinicas-dropdown">
                    <?php foreach($datos as $clinicas): ?>
                        <li>
                            <a class="dropdown-item" 
                               href="#" 
                               data-telefono="<?= $clinicas['telefono']; ?>" 
                               data-email="<?= $clinicas['email']; ?>" 
                               data-direccion="<?= $clinicas['direccion']; ?>">
                               <?= $clinicas['direccion']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <p><strong>Teléfono:</strong> <span id="telefono"></span></p>
            <p><strong>Email:</strong> <span id="email"></span></p>
        </div>

        <div class="col-md-6 reservas-form">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre <span></span></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email-input" class="form-label">Email <span></span></label>
                    <input type="email" class="form-control" id="email-input" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Asunto <span></span></label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
<br>
<script>
    const dropdownButton = document.getElementById('dropdown-button');

    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', event => {
            event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
            
            // Obtener los datos del atributo
            const telefono = item.getAttribute('data-telefono');
            const email = item.getAttribute('data-email');
            const direccion = item.getAttribute('data-direccion');

            // Actualizar los campos del formulario
            document.getElementById('telefono').innerText = telefono;
            document.getElementById('email').innerText = email;
            document.getElementById('email-input').value = email; // Rellenar el campo del formulario con el email
            document.getElementById('name').value = ''; // Opcional: limpiar el nombre si es necesario

            // Actualizar el texto del botón desplegable
            dropdownButton.innerText = direccion; // Cambiar el texto del botón a la dirección seleccionada
        });
    });
</script>

<?= $this->endSection() ?>
