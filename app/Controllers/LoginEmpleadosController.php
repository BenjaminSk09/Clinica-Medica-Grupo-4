<?php

namespace App\Controllers;

use App\Models\EmpleadosModel; // Asegúrate de importar el modelo correctamente
use App\Controllers\BaseController;

class LoginEmpleadosController extends BaseController
{
    public function LoginEmpleado()
    {
        // Cargar la vista desde 'app/Views/empleado/login_empleados.php'
        return view('empleado/login_empleados');
    }

    public function auth()
    {
        $rules = [
            'email' => 'required|valid_email',
            'contrasena' => 'required' // Cambié 'password' a 'contrasena' para que coincida con tu modelo
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        try {
            $empleadosModel = new EmpleadosModel();
            $post = $this->request->getPost(['email', 'contrasena']);

            // Se utiliza la función 'esc()' para evitar inyecciones de código
            $empleado = $empleadosModel->validacion(esc($post['email']), esc($post['contrasena']));

            if ($empleado) {
                // Obtener el rol del empleado
                $id_tipo_usuario = $empleadosModel->getRole($empleado['id_empleado']); // Cambié aquí: debías obtener el rol usando el ID de empleado

                // Establecer la sesión
                $this->setSession($empleado, $id_tipo_usuario);

                // Redirigir según el rol
                return $this->redirectByRole($id_tipo_usuario);
            }

        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Hubo un error en el proceso de autenticación.');
        }

        return redirect()->back()->withInput()->with('error', 'Credenciales no válidas.');
    }

    private function setSession($empleado, $id_tipo_usuario)
    {
        $session = \Config\Services::session();
        $data = [
            'id_empleado' => $empleado['id_empleado'],
            'email' => $empleado['email'],
            'nombre_completo' => esc($empleado['nombre'] . ' ' . $empleado['apellido']),
            'id_tipo_usuario' => $id_tipo_usuario,
            'isLoggedIn' => true
        ];
        $session->set($data);
    }
    /** validadicon usuarios pcainete*/
    private function redirectByRole($id_tipo_usuario)
    {
        switch ($id_tipo_usuario) {
            case 1:  // Administrador
                return redirect()->to(base_url('admin/dashboard'));
            case 2:  // Médico
                return redirect()->to(base_url('pagina_doctor'));
            case 3:  // Secretario
                return redirect()->to(base_url('pagina_secretaria'));
            default:
                return redirect()->to(base_url('default_dashboard'));
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();
        
        if ($session->get('isLoggedIn')) {
            $session->destroy();
        }

        return redirect()->to(base_url('login_empleado'));
    }

    public function checkSessionOnBack()
    {
        $session = \Config\Services::session();

        if ($session->get('isLoggedIn')) {
            $session->destroy();
        }

        return redirect()->to(base_url('login_empleado'));
    }


    //una vista simple cuando intenta entrar 
    public function errorLogin(){
        return view('empleado/errores_login');
    }
}
