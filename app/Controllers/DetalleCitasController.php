<?php

namespace App\Controllers;
use App\Models\RecetasModel;

class DetalleCitasController extends BaseController
{
    public function Recetas(): string
    {
        return view('empleado/medicos/escribir_recetas');
    }
}