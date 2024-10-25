<?=$this->extend('admin/plantilla');?>

<?=$this->section('contenido');?>

<div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Eo_circle_green_checkmark.svg/512px-Eo_circle_green_checkmark.svg.png?20200417132424" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$mensaje;?></h5>
    <p class="card-text">Feliz día</p>
    <a href="<?=base_url($ruta)?>" class="btn btn-primary">regresar</a>
  </div>
</div>









<?=$this->endSection();?>