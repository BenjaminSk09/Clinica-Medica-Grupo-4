<?php

namespace App\Controllers\Pacientes;

use App\Controllers\BaseController;
use App\Models\PacientesModel;
use App\Models\GenerosModel;
use App\Models\CitasModel;
use App\Models\RecetasModel;

class PacienteController extends BaseController
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
//mostrar el formulario de edicion
    public function editarPaciente($id_paciente)
    {
        $pacienteModel = new PacientesModel();
        $generoModel = new GenerosModel();
        //Obtener el paciente por el Id de la Bd
        $data['paciente'] = $pacienteModel->find($id_paciente);
        //lista de generos
        $data['generos'] = $generoModel->findAll();
        //vista del formulario
        return view('paciente/modificar_perfil', $data);
    }

//Actualizacion del paciente
    public function actualizarPaciente()
    {
        $pacienteModel = new PacientesModel();
        //Modelo para consultar los generos.
        $generoModel = new GenerosModel();
        //obtencion de los datos del formulario
        $id_paciente = $this->request->getPost('id_paciente');
        $id_genero = $this->request->getPost('id_genero');

            //Verificacion que el id_genero es o no valido
            if (!$generoModel->find($id_genero)) 
            {
                //Si el genero no existe, enviar un mensaje de error
                return redirect()->back()->with('error', 'El género seleccionado no es válido.');
            }
        
        //Datos a actualizar
        $datos = [
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'peso' => $this->request->getPost('peso'),
            'altura' => $this->request->getPost('altura'),
            'id_genero' => $id_genero,
            'activo' => $this->request->getPost('activo')
        ]; //print_r($datos);
        
        //Actualizar la informacion del paciente
        $pacienteModel->update($id_paciente, $datos);
        //redireccionar a la pagina del perfil del paciente con un mensaje de exito
        return redirect()->to('paciente/perfil' )->with('message', 'Información actualizada exitosamente.');
    }



    // ----------------------------------------------
    // MÉTODOS RELACIONADOS CON CITAS MÉDICAS
    // ----------------------------------------------

    public function indexCitas()
{
    // Obtener el ID del paciente desde la sesión
    $idPaciente = session()->get('id_paciente');

    if (!$idPaciente) {
        return redirect()->to('/login')->with('error', 'Debes iniciar sesión.');
    }

    $citasModel = new CitasModel();
    
    // Obtener las citas del paciente logueado con JOIN para obtener el nombre del médico
    $citas = $citasModel
        ->select('fs2024_proyecto2_citas.*, medicos.nombre as nombre_medico')
        ->join('medicos', 'medicos.id = fs2024_proyecto2_citas.id_medico') // Relacionar con la tabla de médicos
        ->where('fs2024_proyecto2_citas.id_paciente', $idPaciente)
        ->findAll();

    // Enviar las citas a la vista
    $data['citas'] = $citas;

    return view('/paciente/citas_medicas', $data);
}

public function programarCita()
{
    // Verifica que el paciente esté en la sesión
    $idPaciente = session()->get('id_paciente');
    if (!$idPaciente) {
        return redirect()->back()->with('error', 'No se encontró el ID del paciente.');
    }

    // Validar los campos del formulario
    if (!$this->validate([
        'fecha' => 'required',
        'hora'  => 'required',
        'doctor' => 'required',
    ])) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    // Instanciar el modelo
    $citasModel = new CitasModel();

    // Preparar los datos para insertar
    $data = [
        'id_paciente' => $idPaciente,
        'fecha_cita'  => $this->request->getPost('fecha'),
        'hora'        => $this->request->getPost('hora'),
        'id_medico'   => $this->request->getPost('doctor'),
        'fecha_creacion' => date('Y-m-d H:i:s'),
        'id_estado'   => 1  // Por ejemplo, 1 puede ser el estado "Programado"
    ];

    // Insertar la nueva cita en la base de datos
    if ($citasModel->insert($data)) {
        return redirect()->to('/paciente/citas')->with('success', 'Cita programada con éxito.');
    } else {
        return redirect()->back()->with('error', 'Error al programar la cita.');
    }
}


public function indexPerfil()
{
    $session = \Config\Services::session();

    // Verificar si el usuario está autenticado
    if (!$session->get('isLoggedIn')) {
        return redirect()->to('/login_paciente')->with('error', 'Debes iniciar sesión para acceder a tu perfil.');
    }

    // Obtener el ID del paciente desde la sesión
    $idPaciente = $session->get('id_paciente');

    $perfilModel = new PacientesModel();
    // Buscar el paciente específico por ID
    $paciente = $perfilModel->find($idPaciente);

    // Verificar si se encuentra el paciente
    if (!$paciente) {
        return redirect()->to('/paciente')->with('error', 'Paciente no encontrado');
    }

    // Cuando el array es un objeto retornar lo siguiente
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