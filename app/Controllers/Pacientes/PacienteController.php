<?php

namespace App\Controllers\Pacientes;

use App\Controllers\BaseController;
use App\Models\PacientesModel;
use App\Models\GenerosModel;
use App\Models\CitasModel;
use App\Models\RecetasModel;
use App\Models\DetalleCitasModel;

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
        $detalleCitasModel = new DetalleCitasModel(); // Instancia del modelo de detalles de citas
    
        // Obtener las citas del paciente logueado
        $citas = $citasModel
            ->where('id_paciente', $idPaciente)
            ->findAll();
    
        // Obtener detalles de las citas
        foreach ($citas as &$cita) {
            $detalles = $detalleCitasModel
                ->where('id_cita', $cita['id_cita'])
                ->findAll();
    
            $cita['detalles'] = $detalles; // Agrega los detalles a la cita
        }
    
        // Enviar las citas a la vista
        $data['citas'] = $citas;
    
        return view('/paciente/citas_medicas', $data);
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