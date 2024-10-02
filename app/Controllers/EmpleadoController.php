<?php

namespace App\Controllers;
use App\Models\PacientesModel;
use App\Models\EmpleadosModel;

/*controlador para ver vista_paciente */
class EmpleadoController extends BaseController
{
    /*
    public function index(): string
    {
        $pacientes = new PacientesModel();
        $datos['datos']=$pacientes->findAll();

        return view('/paciente/vista_paciente',$datos);     /*Esta linea tiene cambios
         
    }
    */

    public function mainSecretaria()
    {
        return view('empleado/secretaria/pagina_secretaria');
    }
}