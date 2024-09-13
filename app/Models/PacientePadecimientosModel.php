<?php

namespace App\Models;

use CodeIgniter\Model;

class PacientePadecimientosModel extends Model
{
    protected $table      = 'paciente_padecimientos';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_paciente_padecimientos';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_paciente',
        'id_alergia_padecimiento'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'id_paciente'               => 'required|integer',
        'id_alergia_padecimiento'   => 'required|integer',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'id_paciente' => [
            'required' => 'El campo paciente es obligatorio.',
            'integer'  => 'El campo paciente debe ser un número entero.',
        ],
        'id_alergia_padecimiento' => [
            'required' => 'El campo alergia/padecimiento es obligatorio.',
            'integer'  => 'El campo alergia/padecimiento debe ser un número entero.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
