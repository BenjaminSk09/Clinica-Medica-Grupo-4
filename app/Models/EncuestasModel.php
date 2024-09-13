<?php

namespace App\Models;

use CodeIgniter\Model;

class EncuestasModel extends Model
{
    protected $table      = 'encuestas';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_encuesta';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_cita',
        'puntuacion',
        'comentarios',
        'fecha_creacion'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_cita'         => 'required|integer',
        'puntuacion'      => 'required|integer|greater_than[0]|less_than[6]', // Valores de puntuación entre 1 y 5
        'comentarios'     => 'permit_empty|string|max_length[250]',
        'fecha_creacion'  => 'permit_empty|valid_date',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_cita' => [
            'required' => 'El campo cita es obligatorio.',
            'integer'  => 'El campo cita debe ser un número entero.',
        ],
        'puntuacion' => [
            'required' => 'La puntuación es obligatoria.',
            'integer'  => 'La puntuación debe ser un número entero.',
            'greater_than' => 'La puntuación debe ser mayor que 0.',
            'less_than' => 'La puntuación debe ser menor que 6.',
        ],
        'comentarios' => [
            'string'   => 'Los comentarios deben ser una cadena de texto.',
            'max_length' => 'Los comentarios no pueden tener más de 250 caracteres.',
        ],
        'fecha_creacion' => [
            'valid_date' => 'La fecha de creación debe ser una fecha válida.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
