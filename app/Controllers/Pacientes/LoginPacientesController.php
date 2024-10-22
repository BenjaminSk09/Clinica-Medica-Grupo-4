<?php

namespace App\Controllers\Pacientes;

use App\Models\PacientesModel; // Importa el modelo Pacientes
use App\Controllers\BaseController;

class LoginPacientesController extends BaseController
{
    public function loginPaciente()
    {
        // Cargar la vista desde 'app/Views/pacientes/login_pacientes.php'
        return view('paciente/login_paciente');
    }

    public function auth()
    {
        // Reglas de validación
        $rules = [
            'email' => 'required|valid_email',
            'contrasena' => 'required' // Campo obligatorio de contraseña
        ];

        // Si la validación falla, redirigir con los errores
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        try {
            // Crear una instancia del modelo Pacientes
            $pacientesModel = new PacientesModel();
            $post = $this->request->getPost(['email', 'contrasena']);

            // Se utiliza la función 'esc()' para evitar inyecciones de código
            $paciente = $pacientesModel->where('email', esc($post['email']))
                                        ->where('contrasena', esc($post['contrasena']))
                                        ->first();

            // Si el paciente existe, establece la sesión
            if ($paciente) {
                $this->setSession($paciente);
                return redirect()->to(base_url('pacientes/' . $paciente['id_paciente'])); // Redirige a la página principal del paciente
            }
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Hubo un error en el proceso de autenticación.');
        }

        // Si las credenciales son incorrectas
        return redirect()->back()->withInput()->with('error', 'Credenciales no válidas.');
    }

    private function setSession($paciente)
    {
        $session = \Config\Services::session();
        $data = [
            'id_paciente' => $paciente['id_paciente'],
            'email' => $paciente['email'],
            'nombre_completo' => esc($paciente['nombre'] . ' ' . $paciente['apellido']),
            'isLoggedIn' => true
        ];
        $session->set($data);
    }

    public function logout()
    {
        $session = \Config\Services::session();

        if ($session->get('isLoggedIn')) {
            $session->destroy();
        }

        return redirect()->to(base_url('login_paciente'));
    }

    public function checkSessionOnBack()
    {
        $session = \Config\Services::session();

        if ($session->get('isLoggedIn')) {
            $session->destroy();
        }

        return redirect()->to(base_url('login_paciente'));
    }

    // Aquí se eliminó la segunda definición de setSession.
}
