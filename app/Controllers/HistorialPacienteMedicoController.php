<?php

namespace App\Controllers;
use App\Models\RecetasModel;

class HistorialPacienteMedicoController extends BaseController
{
    public function HistorialMedico(): string
    {
        return view('empleado/medicos/Historial_paciente_medico');
    }
}
