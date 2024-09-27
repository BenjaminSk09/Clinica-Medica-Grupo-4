<?= $this->extend('paciente/plantilla_pacientes') ?>

<?=$this->section('contenido') ?>

<link href="<?= base_url('diseno_css/paciente/inicio.css') ?>" rel="stylesheet">


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



<div class="cards-container">
    <?php 
        foreach($datos as $especialidad):
    ?>
    <div class="card">
        <div>
            <img class="card-image" src="<?=$especialidad['imagen']?>" alt="">
        </div>
        <div class="category">Especialidad</div>
        <div class="heading">
            <?=$especialidad['nombre_especialidad'];?>
        </div>
        <div class="author">
            <a href="<?= base_url('especialidades_medicos')."/".$especialidad['id_especialidad']; ?>">Ver más</a>
        </div>
    </div>
    <?php 
        endforeach;
    ?>
</div>
<style>
    /* Contenedor de las cards */
.cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 80px; /* Espacio entre las cards */
    padding: 20px;
}

/* Cards especialidades */
.card {
    width: 190px;
    background: white;
    padding: .4em;
    border-radius: 6px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

/* Imagen dentro de la card */
.card-image {
    background-color: rgb(236, 236, 236);
    width: 100%;
    height: 130px;
    border-radius: 6px 6px 0 0;
}

/* Categoría dentro de la card */
.category {
    text-transform: uppercase;
    font-size: 0.7em;
    font-weight: 600;
    color: rgb(63, 121, 230);
    padding: 10px 7px 0;
}

/* Título de la especialidad */
.heading {
    font-weight: 600;
    color: rgb(88, 87, 87);
    padding: 7px;
}

/* Autor o enlace a más detalles */
.author {
    color: gray;
    font-weight: 400;
    font-size: 11px;
    padding-top: 20px;
}

/* Hacer las cards responsivas */
@media (max-width: 768px) {
    .cards-container {
        gap: 10px;
        justify-content: center;
    }

    .card {
        width: 45%; /* Ocuparán el 45% del ancho de la pantalla */
        margin-bottom: 10px;
    }
}

@media (max-width: 480px) {
    .card {
        width: 100%; /* En pantallas más pequeñas, las cards ocuparán el 100% del ancho */
        margin-bottom: 10px;
    }
}

</style>


<?= $this->endSection() ?>