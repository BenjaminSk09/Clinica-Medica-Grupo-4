<?php

namespace App\Controllers\Pacientes;

use App\Controllers\BaseController;
use App\Models\RecetasModel;

class RecetasController extends BaseController
{
    public function index()
    {
        // Crear una instancia del modelo de recetas
        $recetasModel = new RecetasModel();

        // Obtener todas las recetas
        $data['recetas'] = $recetasModel->findAll();

        // Cargar la vista con los datos obtenidos
        return view('/paciente/recetas_paciente', $data);
    }
}
