<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleCitasModel extends Model
{
    protected $table      = 'detalle_citas';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_detalle_cita';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_cita',
        'fecha_cita',
        'notas_medico',
        'hora',
        'id_medico',
        'id_paciente',
        'receta',
        'tratamiento'
    ];  
}

?>
