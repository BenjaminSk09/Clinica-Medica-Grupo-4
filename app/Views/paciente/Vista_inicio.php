<?= $this->extend('paciente/plantilla_pacientes') ?>

<?=$this->section('contenido') ?>


<!-- Imagenes de carrusel-->
<div class="container my-4">
    <!-- Contenedor centrado -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.unitecoprofesional.es/blog/wp-content/uploads/2021/05/sesiones-clinicas.jpg"
                    class="d-block w-100 img-fluid fixed-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.clinica25demayo.com.ar/wp-content/uploads/especialidades-12-clinica-medica.jpg"
                    class="d-block w-100 img-fluid fixed-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://mibluemedical.com/wp-content/uploads/elementor/thumbs/Captura-de-Pantalla-2022-09-23-a-las-15.34.38-pv7dcchde73d8jwcmge8bkzbdvo5h0eouabpuz28ym.png"
                    class="d-block w-100 img-fluid fixed-image" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>




<div class="card">
    <?php 
            foreach($datos as $especialidad):
        ?>


    <div><img class="card-image"
    src="<?=$especialidad['imagen']?>" alt=""></div>
    <div class="category"> Especialidad </div>
    <div class="heading"> <?=$especialidad['nombre_especialidad'];?>
        <div class="author"> <a href="<?= base_url('especialidades_medicos')."/".$especialidad['id_especialidad']; ?>"></div>
    </div>
    <?php 
            endforeach;
            ?>
</div>


<?= $this->endSection() ?>