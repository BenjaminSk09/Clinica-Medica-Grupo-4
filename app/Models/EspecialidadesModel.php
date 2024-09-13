<?php

namespace App\Models;

use CodeIgniter\Model;

class EspecialidadesModel extends Model
{
    protected $table      = 'especialidades';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_especialidad';  // Campo primario de la tabla

    protected $allowedFields = [
        'nombre_especialidad',
        'descripcion'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'nombre_especialidad' => 'required|string|max_length[70]',
        'descripcion'         => 'permit_empty|string|max_length[200]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'nombre_especialidad' => [
            'required' => 'El nombre de la especialidad es obligatorio.',
            'string'   => 'El nombre de la especialidad debe ser una cadena de texto.',
            'max_length' => 'El nombre de la especialidad no puede tener más de 70 caracteres.',
        ],
        'descripcion' => [
            'string'   => 'La descripción debe ser una cadena de texto.',
            'max_length' => 'La descripción no puede tener más de 200 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
