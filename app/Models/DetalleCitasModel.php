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
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_cita'           => 'required|integer',
        'fecha_cita'        => 'permit_empty|valid_date',
        'notas_medico'      => 'required|string|max_length[250]',
        'hora'              => 'permit_empty|valid_time',
        'id_medico'         => 'required|integer',
        'id_paciente'       => 'required|integer',
        'receta'            => 'permit_empty|string|max_length[200]',
        'tratamiento'       => 'required|string|max_length[200]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_cita' => [
            'required' => 'El campo cita es obligatorio.',
            'integer'  => 'El campo cita debe ser un número entero.',
        ],
        'fecha_cita' => [
            'valid_date' => 'La fecha de la cita debe ser una fecha válida.',
        ],
        'notas_medico' => [
            'required' => 'Las notas del médico son obligatorias.',
            'string'   => 'Las notas del médico deben ser una cadena de texto.',
            'max_length' => 'Las notas del médico no pueden tener más de 250 caracteres.',
        ],
        'hora' => [
            'valid_time' => 'La hora debe ser una hora válida.',
        ],
        'id_medico' => [
            'required' => 'El campo médico es obligatorio.',
            'integer'  => 'El campo médico debe ser un número entero.',
        ],
        'id_paciente' => [
            'required' => 'El campo paciente es obligatorio.',
            'integer'  => 'El campo paciente debe ser un número entero.',
        ],
        'receta' => [
            'string'   => 'La receta debe ser una cadena de texto.',
            'max_length' => 'La receta no puede tener más de 200 caracteres.',
        ],
        'tratamiento' => [
            'required' => 'El tratamiento es obligatorio.',
            'string'   => 'El tratamiento debe ser una cadena de texto.',
            'max_length' => 'El tratamiento no puede tener más de 200 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
