<?php

namespace App\Controllers;

use App\Models\DetalleCitasModel;
use App\Models\CitasModel;
use CodeIgniter\Controller;

class DetalleCitasController extends BaseController
{
    protected $detalleCitasModel;
    protected $citasModel; // Declaramos la propiedad

    public function __construct()
    {
        $this->detalleCitasModel = new DetalleCitasModel();
        $this->citasModel = new CitasModel(); // Instanciamos el modelo
        
    }

    // Mostrar el formulario de receta
    public function formularioReceta($id_cita)
    {
        // Pasamos el id de la cita para el formulario
        $data = [
            'id_cita' => $id_cita
        ];
        return view('empleado/medicos/formulario_receta', $data);
    }

    // Guardar la receta en la base de datos
    public function guardarReceta()
{
    $id_cita = $this->request->getPost('id_cita');
    $receta = $this->request->getPost('receta');

    // Obtener datos de la cita para completar los campos faltantes
    $citaModel = new CitasModel();
    $cita = $citaModel->find($id_cita);

    if ($cita) {
        $data = [
            'id_cita' => $id_cita,
            'receta' => $receta,
            'fecha_cita' => $cita['fecha_cita'],
            'hora' => $cita['hora'],
            'id_medico' => $cita['id_medico'],
            'id_paciente' => $cita['id_paciente']
        ];

        // Verifica si ya existe un registro en detalle_citas para esta cita
        $detalleCitasModel = new DetalleCitasModel();
        $detalleExistente = $detalleCitasModel->where('id_cita', $id_cita)->first();

        if ($detalleExistente) {
            // Actualizar el registro existente
            $detalleCitasModel->update($detalleExistente['id_detalle_cita'], $data);
        } else {
            // Insertar un nuevo registro
            $detalleCitasModel->insert($data);
        }

        return redirect()->to('/pacientes_atendidos')->with('success', 'Receta guardada correctamente.');
    } else {
        return redirect()->back()->with('error', 'Cita no encontrada.');
    }
}


    // Función para mostrar el formulario de Tratamiento
public function formularioTratamiento($id_cita)
{
    $data['id_cita'] = $id_cita;
    return view('empleado/medicos/formulario_tratamiento', $data);
}

// Función para guardar el Tratamiento en la base de datos
public function guardarTratamiento()
{
    $id_cita = $this->request->getPost('id_cita');
    $tratamiento = $this->request->getPost('tratamiento');

    // Obtener datos de la cita para completar los campos faltantes
    $citaModel = new CitasModel();
    $cita = $citaModel->find($id_cita);

    if ($cita) {
        $data = [
            'id_cita' => $id_cita,
            'tratamiento' => $tratamiento,
            'fecha_cita' => $cita['fecha_cita'],
            'hora' => $cita['hora'],
            'id_medico' => $cita['id_medico'],
            'id_paciente' => $cita['id_paciente']
        ];

        // Verifica si ya existe un registro en detalle_citas para esta cita
        $detalleCitasModel = new DetalleCitasModel();
        $detalleExistente = $detalleCitasModel->where('id_cita', $id_cita)->first();

        if ($detalleExistente) {
            // Actualizar el registro existente
            $detalleCitasModel->update($detalleExistente['id_detalle_cita'], $data);
        } else {
            // Insertar un nuevo registro
            $detalleCitasModel->insert($data);
        }

        return redirect()->to('/pacientes_atendidos')->with('success', 'Tratamiento guardado correctamente.');
    } else {
        return redirect()->back()->with('error', 'Cita no encontrada.');
    }
}


// Función para mostrar el formulario de Nota Médica
public function formularioNotaMedica($id_cita)
{
    $data['id_cita'] = $id_cita;
    return view('empleado/medicos/formulario_nota_medica', $data);
}

// Función para guardar la Nota Médica en la base de datos
public function guardarNotaMedica()
{
    $id_cita = $this->request->getPost('id_cita');
    $notas_medico = $this->request->getPost('notas_medico');

    // Obtener datos de la cita para completar los campos faltantes
    $citaModel = new CitasModel();
    $cita = $citaModel->find($id_cita);

    if ($cita) {
        $data = [
            'id_cita' => $id_cita,
            'notas_medico' => $notas_medico,
            'fecha_cita' => $cita['fecha_cita'],
            'hora' => $cita['hora'],
            'id_medico' => $cita['id_medico'],
            'id_paciente' => $cita['id_paciente']
        ];

        // Verifica si ya existe un registro en detalle_citas para esta cita
        $detalleCitasModel = new DetalleCitasModel();
        $detalleExistente = $detalleCitasModel->where('id_cita', $id_cita)->first();

        if ($detalleExistente) {
            // Actualizar el registro existente
            $detalleCitasModel->update($detalleExistente['id_detalle_cita'], $data);
        } else {
            // Insertar un nuevo registro
            $detalleCitasModel->insert($data);
        }

        return redirect()->to('/pacientes_atendidos')->with('success', 'Nota Médica guardada correctamente.');
    } else {
        return redirect()->back()->with('error', 'Cita no encontrada.');
    }
}



}
