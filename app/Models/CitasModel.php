<?php

namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    protected $table         = 'citas'; // El nombre de la tabla
    protected $primaryKey    = 'id_cita'; // La llave primaria
    protected $allowedFields = [
        'id_paciente', 'fecha_cita', 'id_estado', 'motivo_cita', 
        'fecha_creacion', 'hora', 'id_medico', 'valor_pagar'
    ]; // Los campos permitidos para insertar o actualizar

    // Si usas campos de fecha automática
    protected $useTimestamps = false;

    // Si necesitas establecer formatos de fechas (si habilitas useTimestamps)
    // protected $dateFormat = 'datetime'; 
}
?>
