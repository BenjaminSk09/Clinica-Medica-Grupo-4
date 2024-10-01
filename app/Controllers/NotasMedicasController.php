<?php

namespace App\Controllers;
use App\Models\RecetasModel;

class NotasMedicasController extends BaseController
{
    public function notasMedicas(): string
    {
        return view('empleado/medicos/observaciones_medicos');
    }
}