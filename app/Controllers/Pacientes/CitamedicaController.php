<?php

namespace App\Controllers;

use App\Models\CitasMedicasModel;  // Asegúrate de tener un modelo para las citas

class CitaMedicaController extends BaseController
{
    // Mostrar todas las citas
    public function index(): string
    {
        $citasModel = new CitasMedicasModel();
        $datos['citas'] = $citasModel->findAll();  // Obtiene todas las citas desde la base de datos

        return view('/citas/vista_citas', $datos);  // Retorna la vista con los datos de las citas
    }
}