<?=$this->extend('admin/plantilla');?>

<?=$this->section('contenido');?>
<h1>Editar especialidad</h1>
<form action="<?=base_url('ad-especialidades-editar');?>" method="post">
    <input type="hidden" name="txtId" id="txtId" value="<?=$datos['id_especialidad']?>">
    <div class="mb-3">
        <label for="txtName" class="form-label">Nombre
        </label>
        <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Ingrese la especialidad" value="<?=$datos['nombre_especialidad'];?>">
    </div>
    <div class="mb-3">
        <label for="txtDescripcion"class="form-label">Descripción</label>
        <input type="text" class="form-control"id="txtDescripccion" name="txtDescripcion" placeholder="Ingrese la ID de especialidad" value="<?= $datos['descripcion'];?>">
    </div>
    <div class="mb-3">
        <label for="txtImag "class="form-label"> Imagen</label>
        <input type="text" class="form-control" id="txtImage" name="txtImage" placeholder="Seleccione imajen" value="<?= $datos['imagen'];?>">
    </div>
    <div class="mb-3">
        
        <input type="submit" class="form-control btn btn-primary " id="btnGuardar" name="btnGuardar" value="Guardar cambios">
    </div>

</form>


<?=$this->endSection();?>