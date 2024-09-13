<?php

namespace App\Models;

use CodeIgniter\Model;

class RecordatoriosModel extends Model
{
    protected $table      = 'recordatorios';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_recordatorio';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_cita',
        'medio',
        'fecha_envio',
        'mensaje',
        'estado_envio'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_cita'        => 'required|integer',
        'medio'          => 'permit_empty|in_list[email,sms,otro]',
        'fecha_envio'    => 'permit_empty|valid_date',
        'mensaje'        => 'permit_empty|string|max_length[200]',
        'estado_envio'   => 'required|in_list[enviado,pendiente,fallido]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_cita' => [
            'required' => 'El campo cita es obligatorio.',
            'integer'  => 'El campo cita debe ser un número entero.',
        ],
        'medio' => [
            'in_list' => 'El medio debe ser uno de los siguientes: email, sms, otro.',
        ],
        'fecha_envio' => [
            'valid_date' => 'La fecha de envío debe ser una fecha válida.',
        ],
        'mensaje' => [
            'string'   => 'El mensaje debe ser una cadena de texto.',
            'max_length' => 'El mensaje no puede tener más de 200 caracteres.',
        ],
        'estado_envio' => [
            'required' => 'El estado de envío es obligatorio.',
            'in_list'  => 'El estado de envío debe ser uno de los siguientes: enviado, pendiente, fallido.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
