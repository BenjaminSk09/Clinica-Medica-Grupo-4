<?php

namespace App\Controllers\Pacientes;

use App\Controllers\BaseController;
use App\Models\CitasModel;
use App\Models\PacientesModel;

class CitaMedicaController extends BaseController
{
    // Método para mostrar todas las citas
    public function index()
    {
        $citasModel = new CitasModel();
        $citas = $citasModel->findAll();  // Obtener todas las citas

        $data['citas'] = $citas;

        // Retorna la vista 'citas_medicas' con los datos
        return view('/paciente/citas_medicas', $data);
    }

    // Método para programar una nueva cita
    public function programar()
{
    // Verificar si el id_paciente está en la sesión
    $idPaciente = session()->get('id_paciente');
    if (!$idPaciente) {
        return redirect()->back()->with('error', 'No se encontró el ID del paciente.');
    }

    // Validar los campos
    if (!$this->validate([
        'fecha' => 'required',
        'hora' => 'required',
        'doctor' => 'required',
    ])) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $citasModel = new CitasModel();
    $data = [
        'id_paciente' => $idPaciente, // Usa la variable previamente definida
        'fecha_cita' => $this->request->getPost('fecha'),
        'hora' => $this->request->getPost('hora'),
        'id_medico' => $this->request->getPost('doctor'),
        'fecha_creacion' => date('Y-m-d H:i:s'),
        'id_estado' => 1,
    ];
    print_r($datos);

    // Inserta la cita
    if ($citasModel->insert($data)) {
        return redirect()->to('/paciente/citas')->with('success', 'Cita programada con éxito.');
    } else {
        return redirect()->back()->with('error', 'Error al programar la cita.');
    }
}


}
