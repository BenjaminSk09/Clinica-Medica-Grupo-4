<?php

namespace App\Controllers;

use App\Models\CitasModel;
use CodeIgniter\Controller;


class CitasController extends BaseController
{

    protected $session;
    protected $citasModel; // Declaramos la propiedad

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->citasModel = new CitasModel(); // Instanciamos el modelo
    }

    public function obtenerCitasConPaciente($id_medico, $id_estado = 2) {
        return $this->db->table('citas')
            ->where('id_medico', $id_medico)
            ->where('id_estado', $id_estado)
            ->join('pacientes', 'pacientes.id = citas.id_paciente')
            ->get()->getResult();
    }
    
        
 //Función para Ver las Citas Pendientes
 public function verCitasMedico() {
    // Verificar si está logueado y si es un médico
    if (!$this->session->get('isLoggedIn') || $this->session->get('id_tipo_usuario') != 2) {
        return redirect()->to(base_url('login_empleado'))->with('error', 'Debes iniciar sesión como médico.');
    }

    $id_medico = $this->session->get('id_empleado');  // ID del médico logueado

    $citasModel = new CitasModel();
    $citasPendientes = $citasModel->obtenerCitasConPaciente($id_medico, 2); // Filtrar por id_estado = 2

    $datos = [
        'citas' => $citasPendientes,
    ];

    return view('empleado/medicos/pagina_doctor', $datos);  // Renderizar la vista con las citas
}

 
 public function listarPacientesAtendidos()
 {
     // Obtener las citas recientes (estado 3) y completadas (estado 4)
     $data['recientes'] = $this->citasModel->obtenerCitasConPaciente(null, 3); // Estado 'Recibido'
     $data['anteriores'] = $this->citasModel->obtenerCitasConPaciente(null, 4); // Estado 'Completado'
 
     // Renderizar la vista con los datos
     return view('empleado/medicos/pacientes_atendidos', $data);
 }
 

    // Cambiar el estado de la cita a 'Recibido' (id_estado = 3)
    public function marcarRecibido($id_cita)
    {
        // Actualizar el estado de la cita a 'Recibido' (id_estado = 3)
        $this->citasModel->update($id_cita, ['id_estado' => 3]);
    
        // Redirigir a la vista de citas pendientes (pagina_doctor)
        return redirect()->to(base_url('pagina_doctor'))->with('success', 'Paciente recibido con éxito.');
    }
    






 //literamente, borra el cache para que no se guarde la sesion ingresada y evitar problemas de seguridad.
 public function borrarCache(){
    // Configurar las cabeceras para evitar el caché
    $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
    $this->response->setHeader('Cache-Control', 'post-check=0, pre-check=0', false);
    $this->response->setHeader('Pragma', 'no-cache');

    // Verifica si el usuario está logueado
    if (!$this->session->get('isLoggedIn')) {
        // Si no está logueado, destruye la sesión y redirige al login
        $this->session->destroy();
        return redirect()->to(base_url('login_empleado'));
    }

    // Si está logueado, se renderiza la vista protegida
    try {
        return view('empleado/medicos/pagina_doctor');
    } catch (\Exception $e) {
        log_message('error', $e->getMessage());
        return redirect()->to(base_url('error_login')); // Redirigir a una página de error
    }
}


    

}

