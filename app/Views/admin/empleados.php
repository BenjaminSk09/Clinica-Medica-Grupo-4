<?=$this->extend('admin/plantilla');?>


<?=$this->section('contenido');?>
<h1>Empleados</h1>

<a href="<?=base_url('ad-empleado-nuevo');?>" class="btn btn-primary m-4" ><i class="bi-file-plus-fill"></i>
    Agregar</a>

    <table class="table table-striped" id="dataTable">

    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo de usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <?php
    $numero=0;

    foreach($datos as $empleado ):
        $numero++;

    ?>

    <tr>
        <td><?=$numero;?></td>
        <td><?=$empleado['nombre'];?></td>
        <td><?=$empleado['apellido'];?></td>
        <td><?=$empleado['tipo_usuario'];?></td>
        <td>
        <a href="<?=base_url('ad_buscar_empleado/').$empleado['id_empleado']?>"
                    class="btn btn-primary"><i class="bi-pencil-square"></i> Editar </a>
        <button class="btn btn-danger delete-btn" data-id="<?= $empleado['id_empleado']?>"><i
                        class="bi-trash3-fill"></i> Eliminar </a></button>
        </td>
    </tr>



    <?php
    endforeach
?>
</table>

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
                window.location.href = "<?= base_url('ad-empleado-eliminar/') ?>" +
                itemId;
            }
        });
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?=$this->endSection();?>