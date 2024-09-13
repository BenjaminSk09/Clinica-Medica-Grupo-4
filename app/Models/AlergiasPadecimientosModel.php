<?php

namespace App\Models;

use CodeIgniter\Model;

class AlergiasPadecimientosModel extends Model
{
    protected $table      = 'alergias_padecimientos';  // Asegúrate de que el nombre de la tabla coincida con tu base de datos
    protected $primaryKey = 'id_alergia_padecimiento';  // El campo primario de la tabla

    protected $allowedFields = [
        'nombre', 
        'descripcion', 
        'clasificacion_padecimiento'
    ];  // Los campos que se pueden insertar o actualizar

    // Si necesitas alguna configuración adicional, como las reglas de validación o los tipos de datos,
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'nombre'                    => 'required|string|max_length[80]',
        'descripcion'               => 'permit_empty|string|max_length[250]',
        'clasificacion_padecimiento' => 'required|string|max_length[90]',
    ];

    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'string'   => 'El nombre debe ser una cadena de texto.',
            'max_length' => 'El nombre no puede tener más de 80 caracteres.',
        ],
        'descripcion' => [
            'string'   => 'La descripción debe ser una cadena de texto.',
            'max_length' => 'La descripción no puede tener más de 250 caracteres.',
        ],
        'clasificacion_padecimiento' => [
            'required' => 'La clasificación del padecimiento es obligatoria.',
            'string'   => 'La clasificación del padecimiento debe ser una cadena de texto.',
            'max_length' => 'La clasificación del padecimiento no puede tener más de 90 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
