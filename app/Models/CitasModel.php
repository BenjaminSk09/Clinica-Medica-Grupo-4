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

    public function obtenerCitasConPaciente($id_medico = null, $estado = null)
    {
        $this->select('citas.*, CONCAT(pacientes.nombre, " ", pacientes.apellido) AS nombre_paciente');
        $this->join('pacientes', 'citas.id_paciente = pacientes.id_paciente');
    
        if ($id_medico) {
            $this->where('citas.id_medico', $id_medico);
        }
    
        if ($estado) {
            $this->where('citas.id_estado', $estado);
        }
    
        return $this->orderBy('citas.fecha_cita', 'ASC')->findAll();
    }
    



}


?>
