<?=$this->extend('admin/plantilla');?>

<?=$this->section('contenido');?>
<h1>
    <?=$mensaje;?>
</h1>
<a href="<?=base_url($ruta)?>">Regresar</a>



<?=$this->endSection();?>