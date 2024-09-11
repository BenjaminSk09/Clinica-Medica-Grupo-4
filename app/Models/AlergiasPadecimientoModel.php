<?php

namespace App\Models;

use CodeIgniter\Model;

class AlergiaPadecimientoModel extends Model
{
    protected $table         = 'alergia_padecimiento'; // El nombre de la tabla
    protected $primaryKey    = 'id_alergia_padecimiento'; // La llave primaria
    protected $allowedFields = [
        'nombre', 'descripcion', 'clasificacion_padecimiento'
    ]; // Los campos permitidos para insert y update
}
?>
