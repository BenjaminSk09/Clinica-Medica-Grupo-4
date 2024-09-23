<?php

namespace App\Models;

use CodeIgniter\Model;

class PacientesModel extends Model
{
    protected $table      = 'pacientes';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_paciente';  // Campo primario de la tabla

    protected $allowedFields = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'peso',
        'altura',
        'grupo_sanguineo',
        'id_genero',
        'contrasena',
        'fecha_registro',
        'imagen_url',
        'activo'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'nombre'            => 'required|string|max_length[70]',
        'apellido'          => 'required|string|max_length[70]',
        'email'             => 'required|valid_email|max_length[150]',
        'telefono'          => 'permit_empty|string|max_length[15]',
        'direccion'         => 'permit_empty|string|max_length[150]',
        'fecha_nacimiento'  => 'permit_empty|valid_date',
        'peso'              => 'permit_empty|decimal|greater_than[0]',
        'altura'            => 'permit_empty|decimal|greater_than[0]',
        'grupo_sanguineo'   => 'permit_empty|in_list[A+,A-,B+,B-,AB+,AB-,O+,O-]',
        'id_genero'         => 'required|integer',
        'contrasena'        => 'required|string|max_length[200]',
        'fecha_registro'    => 'required|valid_date',
        'imagen_url'        => 'permit_empty|string|max_length[500]',
        'activo'            => 'permit_empty|integer',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'string'   => 'El nombre debe ser una cadena de texto.',
            'max_length' => 'El nombre no puede tener más de 70 caracteres.',
        ],
        'apellido' => [
            'required' => 'El apellido es obligatorio.',
            'string'   => 'El apellido debe ser una cadena de texto.',
            'max_length' => 'El apellido no puede tener más de 70 caracteres.',
        ],
        'email' => [
            'required' => 'El correo electrónico es obligatorio.',
            'valid_email' => 'El correo electrónico debe ser válido.',
            'max_length' => 'El correo electrónico no puede tener más de 150 caracteres.',
        ],
        'telefono' => [
            'string'   => 'El teléfono debe ser una cadena de texto.',
            'max_length' => 'El teléfono no puede tener más de 15 caracteres.',
        ],
        'direccion' => [
            'string'   => 'La dirección debe ser una cadena de texto.',
            'max_length' => 'La dirección no puede tener más de 150 caracteres.',
        ],
        'fecha_nacimiento' => [
            'valid_date' => 'La fecha de nacimiento debe ser una fecha válida.',
        ],
        'peso' => [
            'decimal'  => 'El peso debe ser un valor decimal.',
            'greater_than' => 'El peso debe ser mayor a 0.',
        ],
        'altura' => [
            'decimal'  => 'La altura debe ser un valor decimal.',
            'greater_than' => 'La altura debe ser mayor a 0.',
        ],
        'grupo_sanguineo' => [
            'in_list' => 'El grupo sanguíneo debe ser uno de los valores permitidos.',
        ],
        'id_genero' => [
            'required' => 'El campo género es obligatorio.',
            'integer'  => 'El campo género debe ser un número entero.',
        ],
        'contrasena' => [
            'required' => 'La contraseña es obligatoria.',
            'string'   => 'La contraseña debe ser una cadena de texto.',
            'max_length' => 'La contraseña no puede tener más de 200 caracteres.',
        ],
        'fecha_registro' => [
            'required' => 'La fecha de registro es obligatoria.',
            'valid_date' => 'La fecha de registro debe ser una fecha válida.',
        ],
        'imagen_url' => [
            'string'   => 'La URL de la imagen debe ser una cadena de texto.',
            'max_length' => 'La URL de la imagen no puede tener más de 500 caracteres.',
        ],
        'activo' => [
            'integer'  => 'El campo activo debe ser un número entero.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}


?>
