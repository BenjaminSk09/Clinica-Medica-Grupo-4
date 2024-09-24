<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model // Cambié 'EmpeadosModel' a 'EmpleadosModel'
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
    ]; 
    
    public function validacion($email, $contrasena)
    {
        // Busca el empleado por email
        $empleado = $this->where(['email' => $email])->first();

        // Verifica si el empleado existe y si la contraseña en texto plano coincide
        if ($empleado && $empleado['contrasena'] === $contrasena) { // Corregí aquí: 'contrase$contrasena' a 'contrasena'
            return $empleado;
        }

        return null; // Retorna null si la validación falla
    }

    public function getRole($id_usuario)
    {
        // Asumo que 'id_usuario' debería ser 'id_empleado', verifica si es correcto
        $empleado = $this->find($id_usuario);
        return $empleado ? $empleado['id_tipo_usuario'] : null; // Cambié 'id_rol' a 'id_tipo_usuario' si corresponde
    }
}

?>

