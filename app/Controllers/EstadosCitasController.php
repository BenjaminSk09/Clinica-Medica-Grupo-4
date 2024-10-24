<?php

namespace App\Controllers;


class EstadosCitasController extends BaseController
{
    public function pacientesAtendidos(): string
    {
        return view('empleado/medicos/pacientes_atendidos');
    }
}
