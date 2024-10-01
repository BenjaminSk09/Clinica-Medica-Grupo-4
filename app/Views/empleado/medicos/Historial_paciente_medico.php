<?= $this->extend('empleado/medicos/plantilla_doctor') ?>

<?=$this->section('contenido') ?>
<link href="<?= base_url('diseno_css/empleado/medicos/Historial_paciente.css') ?>" rel="stylesheet">

<!-- Buscador de Pacientes -->
<section class="search-section">
    <input type="text" id="searchInput" placeholder="Buscar paciente...">
    <button id="searchBtn">Buscar</button>
</section>

<?= $this->endSection() ?>