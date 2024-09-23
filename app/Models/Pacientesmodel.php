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
    ]; 

    // Método para actualizar la información del paciente
    public function actualizarPaciente($id_paciente, $data) {
        return $this->update($id_paciente, $data);
    }

    // Método para obtener un paciente por ID
    public function getPacienteById($id_paciente) {
        return $this->find($id_paciente);
    }
}
?>
