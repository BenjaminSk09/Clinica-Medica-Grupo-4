<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PacientesModel;
use App\Models\GenerosModel;
use App\Models\CitasModel;
use App\Models\RecetasModel;

class MainController extends BaseController
{
    // ----------------------------------------------
    // MÉTODOS RELACIONADOS CON PACIENTES
    // ----------------------------------------------
    
    public function indexPacientes(): string
    {
        $pacientes = new PacientesModel();
        $datos['datos'] = $pacientes->findAll();
        return view('paciente/vista_paciente', $datos);
    }

    public function editarPaciente($id_paciente)
    {
        $pacienteModel = new PacientesModel();
        $generoModel = new GenerosModel();
        $data['paciente'] = $pacienteModel->find($id_paciente);
        $data['generos'] = $generoModel->findAll();
        return view('paciente/modificar_perfil', $data);
    }

    public function actualizarPaciente()
    {
        $pacienteModel = new PacientesModel();
        $generoModel = new GenerosModel();
        $id_paciente = $this->request->getPost('id_paciente');
        $id_genero = $this->request->getPost('id_genero');

        if (!$generoModel->find($id_genero)) {
            return redirect()->back()->with('error', 'El género seleccionado no es válido.');
        }

        $datos = [
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'peso' => $this->request->getPost('peso'),
            'altura' => $this->request->getPost('altura'),
            'id_genero' => $id_genero,
            'activo' => $this->request->getPost('activo')
        ];

        $pacienteModel->update($id_paciente, $datos);
        return redirect()->to('paciente/' . $id_paciente)->with('message', 'Información actualizada exitosamente.');
    }

    // ----------------------------------------------
    // MÉTODOS RELACIONADOS CON CITAS MÉDICAS
    // ----------------------------------------------

    public function indexCitas()
    {
        $citasModel = new CitasModel();
        $citas = $citasModel->findAll();
        $data['citas'] = $citas;
        return view('/paciente/citas_medicas', $data);
    }

    public function programarCita()
    {
        $idPaciente = session()->get('id_paciente');
        if (!$idPaciente) {
            return redirect()->back()->with('error', 'No se encontró el ID del paciente.');
        }

        if (!$this->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'doctor' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $citasModel = new CitasModel();
        $data = [
            'id_paciente' => $idPaciente,
            'fecha_cita' => $this->request->getPost('fecha'),
            'hora' => $this->request->getPost('hora'),
            'id_medico' => $this->request->getPost('doctor'),
            'fecha_creacion' => date('Y-m-d H:i:s'),
            'id_estado' => 1,
        ];

        if ($citasModel->insert($data)) {
            return redirect()->to('/paciente/citas')->with('success', 'Cita programada con éxito.');
        } else {
            return redirect()->back()->with('error', 'Error al programar la cita.');
        }
    }

    // ----------------------------------------------
    // MÉTODOS RELACIONADOS CON EL PERFIL DEL PACIENTE
    // ----------------------------------------------

    public function indexPerfil($id)
    {
        $perfilModel = new PacientesModel();
        $paciente = $perfilModel->find($id);

        if (!$paciente) {
            return redirect()->to('/paciente')->with('error', 'Paciente no encontrado');
        }

        return view('paciente/perfil_pacientes', ['paciente' => (object) $paciente]);
    }

    // ----------------------------------------------
    // MÉTODOS RELACIONADOS CON RECETAS MÉDICAS
    // ----------------------------------------------

    public function indexRecetas()
    {
        $recetasModel = new RecetasModel();
        $data['recetas'] = $recetasModel->findAll();
        return view('/paciente/recetas_paciente', $data);
    }
}







?>