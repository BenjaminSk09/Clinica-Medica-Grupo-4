<?php

namespace App\Models;

use CodeIgniter\Model;

class GenerosModel extends Model
{
    protected $table      = 'generos';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_genero';  // Campo primario de la tabla

    protected $allowedFields = [
        'nombre_genero'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'nombre_genero' => 'required|string|max_length[80]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'nombre_genero' => [
            'required' => 'El nombre del género es obligatorio.',
            'string'   => 'El nombre del género debe ser una cadena de texto.',
            'max_length' => 'El nombre del género no puede tener más de 80 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
