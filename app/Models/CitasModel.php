<?php

namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    protected $table      = 'citas';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_cita';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_paciente', 
        'fecha_cita', 
        'id_estado', 
        'motivo_cita', 
        'fecha_creacion', 
        'hora', 
        'id_medico', 
        'valor_pagar'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_paciente'      => 'required|integer',
        'fecha_cita'       => 'required|valid_date',
        'id_estado'        => 'required|integer',
        'motivo_cita'      => 'permit_empty|string|max_length[200]',
        'fecha_creacion'   => 'required|valid_date',
        'hora'             => 'required|valid_time',
        'id_medico'        => 'required|integer',
        'valor_pagar'      => 'permit_empty|decimal',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_paciente' => [
            'required' => 'El campo paciente es obligatorio.',
            'integer'  => 'El campo paciente debe ser un número entero.',
        ],
        'fecha_cita' => [
            'required' => 'La fecha de la cita es obligatoria.',
            'valid_date' => 'La fecha de la cita debe ser una fecha válida.',
        ],
        'id_estado' => [
            'required' => 'El campo estado es obligatorio.',
            'integer'  => 'El campo estado debe ser un número entero.',
        ],
        'motivo_cita' => [
            'string'   => 'El motivo de la cita debe ser una cadena de texto.',
            'max_length' => 'El motivo de la cita no puede tener más de 200 caracteres.',
        ],
        'fecha_creacion' => [
            'required' => 'La fecha de creación es obligatoria.',
            'valid_date' => 'La fecha de creación debe ser una fecha válida.',
        ],
        'hora' => [
            'required' => 'La hora es obligatoria.',
            'valid_time' => 'La hora debe ser una hora válida.',
        ],
        'id_medico' => [
            'required' => 'El campo médico es obligatorio.',
            'integer'  => 'El campo médico debe ser un número entero.',
        ],
        'valor_pagar' => [
            'decimal'  => 'El valor a pagar debe ser un número decimal.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
