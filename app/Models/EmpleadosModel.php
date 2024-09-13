<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model
{
    protected $table      = 'empleados';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_empleado';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_empresa',
        'id_genero',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'id_tipo_usuario',
        'activo',
        'contrasena',
        'fecha_contratacion',
        'imagen_url'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_empresa'         => 'required|integer',
        'id_genero'          => 'required|integer',
        'nombre'             => 'required|string|max_length[80]',
        'apellido'           => 'required|string|max_length[80]',
        'telefono'           => 'permit_empty|string|max_length[15]',
        'email'              => 'required|valid_email|max_length[120]',
        'id_tipo_usuario'    => 'required|integer',
        'activo'             => 'permit_empty|integer|in_list[0,1]',
        'contrasena'         => 'required|string|max_length[200]',
        'fecha_contratacion' => 'permit_empty|valid_date',
        'imagen_url'         => 'permit_empty|string|max_length[500]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_empresa' => [
            'required' => 'El campo empresa es obligatorio.',
            'integer'  => 'El campo empresa debe ser un número entero.',
        ],
        'id_genero' => [
            'required' => 'El campo género es obligatorio.',
            'integer'  => 'El campo género debe ser un número entero.',
        ],
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'string'   => 'El nombre debe ser una cadena de texto.',
            'max_length' => 'El nombre no puede tener más de 80 caracteres.',
        ],
        'apellido' => [
            'required' => 'El apellido es obligatorio.',
            'string'   => 'El apellido debe ser una cadena de texto.',
            'max_length' => 'El apellido no puede tener más de 80 caracteres.',
        ],
        'telefono' => [
            'string'   => 'El teléfono debe ser una cadena de texto.',
            'max_length' => 'El teléfono no puede tener más de 15 caracteres.',
        ],
        'email' => [
            'required' => 'El correo electrónico es obligatorio.',
            'valid_email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'max_length' => 'El correo electrónico no puede tener más de 120 caracteres.',
        ],
        'id_tipo_usuario' => [
            'required' => 'El campo tipo de usuario es obligatorio.',
            'integer'  => 'El campo tipo de usuario debe ser un número entero.',
        ],
        'activo' => [
            'integer'  => 'El campo activo debe ser un número entero.',
            'in_list'  => 'El campo activo debe ser 0 o 1.',
        ],
        'contrasena' => [
            'required' => 'La contraseña es obligatoria.',
            'string'   => 'La contraseña debe ser una cadena de texto.',
            'max_length' => 'La contraseña no puede tener más de 200 caracteres.',
        ],
        'fecha_contratacion' => [
            'valid_date' => 'La fecha de contratación debe ser una fecha válida.',
        ],
        'imagen_url' => [
            'string'   => 'La URL de la imagen debe ser una cadena de texto.',
            'max_length' => 'La URL de la imagen no puede tener más de 500 caracteres.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
