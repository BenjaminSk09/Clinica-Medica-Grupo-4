<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*Pafina principal*/ 
$routes->get('/', 'Home::index');
$routes->get('Horarios','Home::Horarios');
$routes->get('Nosotros','Home::Nosotros');
//$routes->get('medicos','MedicosController::index');
$routes->get('Ubicacion','Home::Ubicacion');
$routes->get('home_reservas','EmpresasController::verClinicas');
$routes->get('especialidades_medicos/(:num)','MedicosController::especialidadesMedicos/$1'); //para redirigir a los medicos de la especialidad disponibles de home

/*Pagina paciente*/
$routes->get('paciente', 'Pacientes\PacienteController::index');
$routes->get('citas-medicas', 'Pacientes\CitaMedicaController::index');
$routes->get('recetas', 'Pacientes\RecetasController::index');
$routes->get('paciente/(:num)', 'Pacientes\PerfilController::index/$1');
$routes->get('pacientes/editar/(:num)', 'Pacientes\PacienteController::editar/$1');
$routes->post('pacientes/actualizar_perfil', 'Pacientes\PacienteController::actualizar');
$routes->get('perfil/(:num)', 'Pacientes\PacienteController::index/$1'); // Mostrar perfil del paciente

// ruta para citas// 
$routes->group('paciente', function($routes) {
    // Ruta para mostrar las citas médicas
    $routes->get('citas', 'Pacientes\CitaMedicaController::index');
    
    // Ruta para programar una nueva cita
    $routes->post('citas/programar', 'Pacientes\CitaMedicaController::programar');
});

// En app/Config/Routes.php

/*cambio*/

/*Pagina empleados*/ 
/*Medicoas*/
$routes->get('medicos/pagina_doctor', 'MedicosController::borrarCache');
$routes->get('medicos', 'MedicosController::index'); // Ruta para acceder a la página de médicos

/* Login empleados */
$routes->get('login_empleado', 'LoginEmpleadosController::LoginEmpleado');
$routes->post('login_empleado/auth', 'LoginEmpleadosController::auth'); // Usar POST para la autenticación


////Medicos
$routes->get('recetasDoctor', 'MedicosController::Recetas');
$routes->get('historialPaciente', 'MedicosController::HistorialMedico');
$routes->get('observaciones', 'MedicosController::notasMedicas');

