<?php 
namespace App\Controllers;

class MedicosController extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // Configurar las cabeceras para evitar el caché
        $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        $this->response->setHeader('Cache-Control', 'post-check=0, pre-check=0', false);
        $this->response->setHeader('Pragma', 'no-cache');

        // Verifica si el usuario está logueado
        if (!$this->session->get('isLoggedIn')) {
            // Si no está logueado, destruye la sesión y redirige al login
            $this->session->destroy();
            return redirect()->to(base_url('login'));
        }

        // Si está logueado, se renderiza la vista protegida
        try {
            return view('empleado/medicos/pagina_doctor');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->to(base_url('error')); // Redirigir a una página de error
        }
    }
}
