<?php 
namespace App\Controllers;

use App\Models\MedicosModel;

class MedicosController extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $medicos = new MedicosModel();

        $datos['datos']=$medicos->obtenerMedicos();
        //print_r($datos);
        return view('paciente/Medicos',$datos);
    }
    
    public function especialidadesMedicos($id){
        $medicos = new MedicosModel();

        $datos['datos']=$medicos->especialidadesMedicos($id);
        //print_r($datos);
        return view('paciente/Medicos',$datos);


    }


    public function borrarCache(){
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
    //Detalle Cita = Recta
    public function Recetas(): string
    {
        return view('empleado/medicos/escribir_recetas');
    }
    //Paciente Pacedimiento = 
    public function HistorialMedico(): string
    {
        return view('empleado/medicos/Historial_paciente_medico');
    }
    //
    public function notasMedicas(): string
    {
        return view('empleado/medicos/observaciones_medicos');
    }
}