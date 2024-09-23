<?php

namespace App\Controllers\Pacientes;

use App\Controllers\BaseController;
use App\Models\PacientesModel;

class PerfilController extends BaseController
{
    // En el controlador
public function index($id)
{
    $perfilModel = new PacientesModel();

    // Buscar un paciente específico por ID
    $paciente = $perfilModel->find($id);

    // Verificar si se encontró el paciente
    if (!$paciente) {
        return redirect()->to('/paciente')->with('error', 'Paciente no encontrado');
    }

    // Si el resultado es un array, no un objeto
    return view('paciente/perfil_pacientes', ['paciente' => (object) $paciente]);
}



}
