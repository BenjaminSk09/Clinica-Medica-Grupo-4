<?=$this->extend('admin/plantilla');?>

<?=$this->section('contenido');?>
<h1>Nuevo empleado</h1>
<form action="<?=base_url('ad-empleado-agregar');?>" method="post">
    <div class="mb-3">
        <label for="txt_nombre" class="form-label">Nombre
        </label>
        <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Ingrese su nombre">
    </div>
    <div class="mb-3">
        <label for="txt_apellido" class="form-label">Apellido
        </label>
        <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Ingrese su apellido">
    </div>
    <div class="mb-3">
        <label for="txt_telefono" class="form-label">Teléfono
        </label>
        <input type="number" class="form-control" id="txt_telefono" name="txt_telefono" placeholder="Ingrese su teléfono">
    </div>
    <div class="mb-3">
        <label for="txt_email" class="form-label">correo electrónico
        </label>
        <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Ingrese su correo electrónico">
    </div>

    
    <div class="mb-3">
    <label for="ls_genero" class="form-label">Genero
    </label>
        <select class="form-select" name="ls_genero" id="ls_genero" aria-label="Default select example">
            <?php
            foreach($generos as $genero):
            ?>
                <option value="<?=$genero['id_genero'];?>"><?=$genero['nombre_genero'];?></option>
            <?php
            endforeach;

            ?>

        </select>
    </div>
    <div class="mb-3">
    <label for="ls_empresa" class="form-label">Empresa
    </label>
        <select class="form-select" name="ls_empresa" id="ls_empresa" aria-label="Default select example">
            <?php
            foreach($empresas as $empresa):
            ?>
                <option value="<?=$empresa['id_empresa'];?>"><?=$empresa['nombre_empresa'];?></option>
            <?php
            endforeach;

            ?>

        </select>
    </div>
    <div class="mb-3">
    <label for="ls_tipo" class="form-label">Tipo de usuario
    </label>
        <select class="form-select" name="ls_tipo" id="ls_tipo" aria-label="Default select example">
            <?php
            foreach($tipos as $tipo):
            ?>
                <option value="<?=$tipo['id_tipo_usuario'];?>"><?=$tipo['nombre'];?></option>
            <?php
            endforeach;

            ?>

        </select>
    </div>
    <div class="mb-3">
        <label for="txt_contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="txt_contrasena" name="txt_contrasena"
            placeholder="Ingrese  una contraseña">
    </div>
    <div class="mb-3">
        <label for="txt_verificar_contrasena" class="form-label">verificar contraseña</label>
        <input type="password" class="form-control" id="txt_verificar_contrasena" name="txt_verificar_contrasena"
            placeholder="Ingrese  una contraseña">
    </div>
    <div class="mb-3">
        <label for="txt_image " class="form-label"> Imagen</label>
        <input type="text" class="form-control" id="txt_image" name="txt_image" placeholder="Seleccione imajen">
    </div>
    <div class="mb-3">

        <input type="submit" class="form-control" id="btnGuardar" name="btnGuardar" value="Agregar empleado ">
    </div>

</form>


<?=$this->endSection();?>