<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadosModel extends Model
{
    protected $table      = 'estados';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_estado';  // Campo primario de la tabla

    protected $allowedFields = [
        'nombre_estado'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'nombre_estado' => 'permit_empty|string|max_length[50]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'nombre_estado' => [
            'string'   => 'El nombre del estado debe ser una cadena de texto.',
            'max_length' => 'El nombre del estado no puede tener más de 50 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
