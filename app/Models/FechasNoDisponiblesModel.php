<?php

namespace App\Models;

use CodeIgniter\Model;

class FechasNoDisponiblesModel extends Model
{
    protected $table      = 'fechas_no_disponibles';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_fecha_no_disponible';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_cita',
        'fecha_hora_inicio',
        'fecha_hora_final',
        'fecha_dia'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_cita'             => 'required|integer',
        'fecha_hora_inicio'   => 'permit_empty|valid_time',
        'fecha_hora_final'    => 'permit_empty|valid_time',
        'fecha_dia'           => 'permit_empty|valid_date',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_cita' => [
            'required' => 'El campo cita es obligatorio.',
            'integer'  => 'El campo cita debe ser un número entero.',
        ],
        'fecha_hora_inicio' => [
            'valid_time' => 'La hora de inicio debe ser una hora válida.',
        ],
        'fecha_hora_final' => [
            'valid_time' => 'La hora final debe ser una hora válida.',
        ],
        'fecha_dia' => [
            'valid_date' => 'La fecha del día debe ser una fecha válida.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
