<?php

namespace App\Controllers\Pacientes;

use App\Controllers\BaseController;
use App\Models\

class ResultadosController extends BaseController
{
    public function index()
    {
        return view('paciente/mis_resultados');
    }
}
