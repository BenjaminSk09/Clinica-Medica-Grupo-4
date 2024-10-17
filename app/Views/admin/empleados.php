<?=$this->extend('admin/plantilla');?>


<?=$this->section('contenido');?>
<h1>Especialidades</h1>

<a href="<?=base_url('ad-especialidades-nuevo');?>" class="btn btn-primary"><i class="bi-file-plus-fill"></i>
    Agregar</a>
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
                <a href="<?=base_url('buscar_especialidad/').$especialidad['id_especialidad']?>"
                    class="btn btn-primary"><i class="bi-pencil-square"></i> Editar </a>
                <button class="btn btn-danger delete-btn" data-id="<?= $especialidad['id_especialidad']?>"><i
                        class="bi-trash3-fill"></i> Eliminar </a></button>

            </div>
        </div>

    </div>


    <?php
    endforeach
?>
</div>

<script>
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function() {
        const itemId = this.getAttribute('data-id');

        // Mostrar SweetAlert para confirmar la eliminación
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirigir al controlador para eliminar el elemento
                window.location.href = "<?= base_url('ad-especialidades-eliminar/') ?>" +
                itemId;
            }
        });
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?=$this->endSection();?>