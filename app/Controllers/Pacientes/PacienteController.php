<?php

namespace App\Controllers\Pacientes;  // El namespace correcto

use App\Controllers\BaseController;  // Asegúrate de que el BaseController está en el espacio de nombres correcto
use App\Models\PacientesModel;       // Importa el modelo correctamente

/* Controlador para ver vista_paciente */
class PacienteController extends BaseController
{
    public function index(): string
    {
        $pacientes = new PacientesModel();
        $datos['datos'] = $pacientes->findAll();

        return view('/paciente/vista_paciente', $datos);  /*Esta linea tiene cambios*/
    }
}
