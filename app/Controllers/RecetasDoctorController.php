<?php

namespace App\Controllers;
use App\Models\RecetasModel;

class RecetasDoctorController extends BaseController
{
    public function Recetas(): string
    {
        return view('empleado/medicos/escribir_recetas');
    }
}
