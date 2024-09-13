<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoPagoModel extends Model
{
    protected $table      = 'tipo_pago';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_tipo_pago';  // Campo primario de la tabla

    protected $allowedFields = [
        'tipo_pago'
    ];  // Campos que se pueden insertar o actualizar

    // Reglas de validación para los campos
    //estan aca abajo como comentario:
    /*
    protected $validationRules = [
        'tipo_pago' => 'required|in_list[efectivo, Visa, MasterCard, AmericanExpress, otro]',
    ];

    // Mensajes personalizados para las reglas de validación
    protected $validationMessages = [
        'tipo_pago' => [
            'required' => 'El tipo de pago es obligatorio.',
            'in_list'  => 'El tipo de pago debe ser uno de los siguientes: efectivo, Visa, MasterCard, AmericanExpress, otro.',
        ],
    ];

    protected $returnType = 'array';  // Puedes cambiarlo a 'object' si prefieres trabajar con objetos

    protected $useTimestamps = false;  // Si la tabla tiene campos de tipo TIMESTAMP, configura esto en true y añade los campos 'created_at' y 'updated_at'
    */
}

?>
