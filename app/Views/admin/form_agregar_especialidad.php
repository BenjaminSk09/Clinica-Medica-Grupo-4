<?=$this->extend('admin/plantilla');?>

<?=$this->section('contenido');?>
<h1>Agregar especialidades</h1>
<form action="<?=base_url('ad-especialidades-agregar');?>" method="post">
    <div class="mb-3">
        <label for="txtName" class="form-label">Nombre
        </label>
        <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Ingrese la especialidad">
    </div>
    <div class="mb-3">
        <label for="txtDescripcion"class="form-label">Descripción</label>
        <input type="text" class="form-control"id="txtDescripccion" name="txtDescripcion" placeholder="Ingrese la ID de especialidad">
    </div>
    <div class="mb-3">
        <label for="txtImag "class="form-label"> Imagen</label>
        <input type="text" class="form-control" id="txtImage" name="txtImage" placeholder="Seleccione imajen">
    </div>
    <div class="mb-3">
        
        <input type="submit" class="form-control" id="btnGuardar" name="btnGuardar" value="Agregar especialidad ">
    </div>

</form>


<?=$this->endSection();?>