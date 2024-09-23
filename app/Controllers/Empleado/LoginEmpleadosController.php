<?php
namespace App\Controllers;
namespace App\Controllers\Empleado;

use App\Controllers\BaseController;

class LoginEmpleadosController extends BaseController
{
    public function LoginEmpleado()
    {
        // Cargar la vista desde 'app/Views/empleado/login_empleados.php'
        return view('empleado/login_empleados');
    }
}