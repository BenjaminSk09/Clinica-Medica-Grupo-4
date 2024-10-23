<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicosModel extends Model
{
    protected $table      = 'medicos';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_medico';  // Campo primario de la tabla

    protected $allowedFields = [
        'id_empleado',
        'id_especialidad',
        'horario_atencion',
        'numero_licencia'
    ];  
    
    public function especialidadesMedicos($id){
        
        return $this->db->table('empleados')
            ->join('medicos', 'empleados.id_empleado = medicos.id_empleado')
            ->select('empleados.nombre, empleados.apellido, empleados.telefono, medicos.id_especialidad') 
            ->where('medicos.id_especialidad',$id)
            ->get()
            ->getResultArray(); 
    }
    public function obtenerMedicos(){
        
        return $this->db->table('empleados')
            ->join('medicos', 'empleados.id_empleado = medicos.id_empleado')
            ->select('empleados.nombre, empleados.apellido, empleados.telefono, medicos.id_especialidad') 
            ->get()
            ->getResultArray(); 
    }
    
}

?>
