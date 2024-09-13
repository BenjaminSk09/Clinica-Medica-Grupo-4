<?php

namespace App\Models;

use CodeIgniter\Model;

class PagosModel extends Model
{
    protected $table      = 'pagos';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_pago';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_cita',
        'monto',
        'id_tipo_pago',
        'fecha_pago',
        'observaciones'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_cita'         => 'required|integer',
        'monto'           => 'permit_empty|decimal|greater_than[0]', // Monto debe ser decimal mayor a 0
        'id_tipo_pago'    => 'required|integer',
        'fecha_pago'      => 'required|valid_date',
        'observaciones'   => 'permit_empty|string|max_length[250]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_cita' => [
            'required' => 'El campo cita es obligatorio.',
            'integer'  => 'El campo cita debe ser un número entero.',
        ],
        'monto' => [
            'decimal'  => 'El monto debe ser un valor decimal.',
            'greater_than' => 'El monto debe ser mayor a 0.',
        ],
        'id_tipo_pago' => [
            'required' => 'El tipo de pago es obligatorio.',
            'integer'  => 'El tipo de pago debe ser un número entero.',
        ],
        'fecha_pago' => [
            'required' => 'La fecha de pago es obligatoria.',
            'valid_date' => 'La fecha de pago debe ser una fecha válida.',
        ],
        'observaciones' => [
            'string'   => 'Las observaciones deben ser una cadena de texto.',
            'max_length' => 'Las observaciones no pueden tener más de 250 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
