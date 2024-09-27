<?= $this->extend('paciente/plantilla_pacientes') ?>

<?=$this->section('contenido') ?>

<link href="<?= base_url('diseno_css/paciente/nosotros.css') ?>" rel="stylesheet">
<script src="codigo_js/pacienete/nostros.js"></script>

    <!--Sobre Nosotros-->
    <!-- Sección Acerca de -->
    <div class="container mt-5">
        <div class="about-section">
            <div class="about-text">
                <p class="text-muted">¿Quiénes somos?</p>
                <h1 class="about-title">Acerca de <span class="highlight">Nuestra Clinica</span></h1>
                <p class="text-black">Somos una empresa Guatemalteca, enfocada en brindar un servicio integral de cuidados hospitalarios en
                    casa, centrados en el bienestar del paciente y su familia.</p>
                <p class="text-black">Contamos con un equipo de profesionales y especialistas altamente calificados dedicados a brindar
                    soluciones adaptadas a las necesidades individuales de cada paciente.</p>
                <p class="text-black">Brindamos la mejor atención y tratamiento médico con dedicación personalizada, de forma segura y
                    tranquila en la comodidad del hogar y de la mano de la familia.</p>
            </div>
            <div class="about-image">
                <img src="imagenes/paciente/clinica_medica.jpg" alt="Atención médica" width="500px" height="300px">
            </div>
        </div>
    </div>

    <!-- Sección CTA -->
    <div class="cta-section">
        <p class="text-muted">Nuestra Clinica</p>
        <h2>Nuestra naturaleza es cuidar</h2>
        <a href="Contactanos" class="btn btn-primary">Contáctenos ahora</a>
    </div>

    <!-- Sección Visión y Misión -->
    <div class="container mt-5">
        <div class="vision-mision-section">
            <div class="vision-mision-card">
                <h3>Nuestra visión</h3>
                <p class="text-black">Ser el servicio hospitalario y atención médica en casa más completo, ético y respetable de Guatemala.
                </p>
            </div>
            <div class="vision-mision-card">
                <h3>Nuestra misión</h3>
                <p class="text-black">Ser un modelo de prestación de servicios hospitalarios y de atención médica en casa, que sea seguro,
                    confiable y de atención profesional que de manera personalizada se adapte a las necesidades de salud
                    de cada paciente y su familia, de una forma sostenible en el tiempo.</p>
            </div>
        </div>
    </div>

    <!-- Sección Nuestros Valores -->
    <div class="valores-section">
        <h2 class="valores-title">Nuestros valores</h2>
        <div class="container">
            <div class="valores-grid">
                <div class="valor-card">
                    <h4>Integridad</h4>
                    <p>Tenemos apego inquebrantable a los valores que nos representan.</p>
                </div>
                <div class="valor-card">
                    <h4>Vocación de Servicio</h4>
                    <p>Somos apasionados por el bienestar integral de nuestros pacientes y sus familias.</p>
                </div>
                <div class="valor-card">
                    <h4>Empatía</h4>
                    <p>Nos centramos en el bienestar de nuestros pacientes y sus familias.</p>
                </div>
                <div class="valor-card">
                    <h4>Innovación</h4>
                    <p>Nos capacitamos en nuevos procesos, equipos y servicios. Lo mejor para brindar un servicio de
                        alta calidad.</p>
                </div>
                <div class="valor-card">
                    <h4>Ética</h4>
                    <p>Nuestros procesos e información son transparentes, honestos y al alcance de todos.</p>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>