<?php

namespace App\Controllers\Pacientes;  // El namespace correcto

use App\Controllers\BaseController;  // Asegúrate de que el BaseController está en el espacio de nombres correcto
use App\Models\PacientesModel;       // Importa el modelo correctamente
use App\Models\GenerosModel;         // Importa el modelo de géneros

/* Controlador para ver vista_paciente */
class PacienteController extends BaseController
{
    public function index(): string
    {
        $pacientes = new PacientesModel();
        $datos['datos'] = $pacientes->findAll();

        return view('paciente/vista_paciente', $datos);  /* Cambiado para que el path sea correcto */
    }

    // Mostrar el formulario de edición
    public function editar($id_paciente)
    {
        $pacienteModel = new PacientesModel();
        $generoModel = new GenerosModel(); // Cambiado a GenerosModel

        // Obtener el paciente por ID
        $data['paciente'] = $pacienteModel->find($id_paciente);
        
        // Obtener la lista de géneros
        $data['generos'] = $generoModel->findAll();

        // Cargar la vista del formulario
        return view('paciente/modificar_perfil', $data);
    }

    // Procesar la actualización del paciente
    public function actualizar()
    {
        $pacienteModel = new PacientesModel();
        $generoModel = new GenerosModel(); // Modelo para consultar géneros
    
        // Obtener los datos del formulario
        $id_paciente = $this->request->getPost('id_paciente');
        $id_genero = $this->request->getPost('id_genero');
    
        // Verificar que el id_genero es válido
        if (!$generoModel->find($id_genero)) {
            // Si el género no existe, redirigir con un mensaje de error
            return redirect()->back()->with('error', 'El género seleccionado no es válido.');
        }
    
        // Datos que se van a actualizar
        $datos = [
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'peso' => $this->request->getPost('peso'),
            'altura' => $this->request->getPost('altura'),
            'id_genero' => $id_genero, // id_genero verificado
            'activo' => $this->request->getPost('activo')
        ];
        print_r($datos);
        
        
        // Actualizar la información del paciente
        $pacienteModel->update($id_paciente, $datos);
    
        // Redirigir a la página de perfil del paciente con un mensaje de éxito
        return redirect()->to('/pacientes/perfil/' . $id_paciente)->with('message', 'Información actualizada exitosamente.');
        
    }
    

    public function perfil($id_paciente) {
        $pacienteModel = new PacientesModel();
        $data['paciente'] = $pacienteModel->getPacienteById($id_paciente);
        // Si necesitas los géneros
        $generoModel = new GenerosModel();
        $data['generos'] = $generoModel->findAll(); 

        return view('paciente/perfil_pacientes', $data);
    }
}
?>
