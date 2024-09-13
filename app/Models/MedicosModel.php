<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicosModel extends Model
{
    protected $table      = 'medicos';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_medico';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_empleado',
        'id_especialidad',
        'horario_atencion',
        'numero_licencia'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_empleado'         => 'required|integer',
        'id_especialidad'     => 'required|integer',
        'horario_atencion'    => 'permit_empty|string|max_length[100]',
        'numero_licencia'     => 'permit_empty|string|max_length[20]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_empleado' => [
            'required' => 'El campo empleado es obligatorio.',
            'integer'  => 'El campo empleado debe ser un número entero.',
        ],
        'id_especialidad' => [
            'required' => 'El campo especialidad es obligatorio.',
            'integer'  => 'El campo especialidad debe ser un número entero.',
        ],
        'horario_atencion' => [
            'string'   => 'El horario de atención debe ser una cadena de texto.',
            'max_length' => 'El horario de atención no puede tener más de 100 caracteres.',
        ],
        'numero_licencia' => [
            'string'   => 'El número de licencia debe ser una cadena de texto.',
            'max_length' => 'El número de licencia no puede tener más de 20 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
