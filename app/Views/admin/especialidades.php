<?=$this->extend('admin/plantilla');?>


<?=$this->section('contenido');?>
<h1>Especialidades</h1>

<a href="<?=base_url('ad-especialidades-nuevo');?>" class="btn btn-primary"><i class="bi-file-plus-fill"></i> Agregar</a>
<div class="row">

    <?php
    foreach($datos as $especialidad ):
    ?>

    <div class="col-4 mt-4">

        <div class="card" style="width: 18rem;">
            <img src="<?=$especialidad['imagen']?>" class="card-img-top" alt="imagen de especialdiad">
            <div class="card-body">
                <h5 class="card-title"><?=$especialidad['nombre_especialidad']?></h5>
                <p class="card-text"><?=$especialidad['descripcion']?></p>
                <a href="<?=base_url('buscar_especialidad/').$especialidad['id_especialidad']?>" class="btn btn-primary"><i class="bi-pencil-square"></i> Editar </a>
                <a href="<?=base_url('eliminar_especialidad/').$especialidad['id_especialidad']?>" class="btn btn-primary"><i class="bi-trash3-fill"></i> Eliminar </a>
            </div>
        </div>

    </div>


    <?php
    endforeach
?>
</div>



<?=$this->endSection();?>