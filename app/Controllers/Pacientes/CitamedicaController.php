<?php

namespace App\Controllers\Pacientes;

use App\Controllers\BaseController;
use App\Models\CitasModel;  // Importa el modelo CitasModel

class CitaMedicaController extends BaseController
{
    // Método para mostrar todas las citas
    public function index(): string
    {
        $citas = new CitasModel();  // Crea una instancia del modelo
        $datos['datos'] = $citas->findAll();  // Obtiene todas las citas

        // Retorna la vista 'citas_medicas' con los datos
        return view('/paciente/citas_medicas', $datos);
    }
}
