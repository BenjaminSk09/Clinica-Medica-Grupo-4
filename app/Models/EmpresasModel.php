<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpresasModel extends Model
{
    protected $table      = 'empresas';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_empresa';  // Campo primario de la tabla

    protected $allowedFields = [
        'nombre_empresa',
        'direccion',
        'telefono',
        'email',
        'url_imagen',
        'fecha_creacion'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'nombre_empresa'   => 'permit_empty|string|max_length[90]',
        'direccion'        => 'permit_empty|string|max_length[150]',
        'telefono'         => 'permit_empty|string|max_length[15]',
        'email'            => 'required|valid_email|max_length[150]',
        'url_imagen'       => 'permit_empty|string|max_length[500]',
        'fecha_creacion'   => 'permit_empty|valid_date',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'nombre_empresa' => [
            'string'   => 'El nombre de la empresa debe ser una cadena de texto.',
            'max_length' => 'El nombre de la empresa no puede tener más de 90 caracteres.',
        ],
        'direccion' => [
            'string'   => 'La dirección debe ser una cadena de texto.',
            'max_length' => 'La dirección no puede tener más de 150 caracteres.',
        ],
        'telefono' => [
            'string'   => 'El teléfono debe ser una cadena de texto.',
            'max_length' => 'El teléfono no puede tener más de 15 caracteres.',
        ],
        'email' => [
            'required' => 'El correo electrónico es obligatorio.',
            'valid_email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'max_length' => 'El correo electrónico no puede tener más de 150 caracteres.',
        ],
        'url_imagen' => [
            'string'   => 'La URL de la imagen debe ser una cadena de texto.',
            'max_length' => 'La URL de la imagen no puede tener más de 500 caracteres.',
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
