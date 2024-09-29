<?php

namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    protected $table      = 'citas';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_cita';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_paciente', 
        'fecha_cita', 
        'id_estado', 
        'motivo_cita', 
        'fecha_creacion', 
        'hora', 
        'id_medico', 
        'valor_pagar'
    ]; 

    // Método para agregar una cita
    public function agregarCita($data)
    {
        return $this->insert($data);
    }
}


?>
