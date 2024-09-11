<?php

namespace App\Controllers;
use App\Models\PacientesModel;

/*controlador para ver vista_paciente */
class PacienteController extends BaseController
{
    public function index(): string
    {
        $pacientes = new PacientesModel();
        $datos['datos']=$pacientes->findAll();

        return view('/paciente/vista_paciente',$datos);     /*Esta linea tiene cambios */
    }
}