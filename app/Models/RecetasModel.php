<?php

namespace App\Models;

use CodeIgniter\Model;

class RecetasModel extends Model
{
    protected $table = 'detalle_citas'; // Nombre de la tabla
    protected $primaryKey = 'id_detalle_cita'; // Llave primaria de la tabla
    protected $allowedFields = ['id_cita', 'fecha_cita', 'notas_medico', 'hora', 'id_medico', 'id_paciente', 'receta', 'tratamiento']; // Campos permitidos para insert/update

    
}
