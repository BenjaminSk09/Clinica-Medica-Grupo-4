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
// Rutas para el controlador unificado "PacienteController"

// Ruta para mostrar la lista de pacientes
$routes->get('paciente', 'Pacientes\PacienteController::indexPacientes');

// Ruta para mostrar las citas médicas
$routes->get('citas-medicas', 'Pacientes\PacienteController::indexCitas');

// Ruta para mostrar las recetas
$routes->get('recetas', 'Pacientes\PacienteController::indexRecetas');

// Ruta para mostrar el perfil del paciente por ID
$routes->get('paciente/(:num)', 'Pacientes\PacienteController::indexPerfil/$1');

// Ruta para editar el perfil del paciente
$routes->get('pacientes/editar/(:num)', 'Pacientes\PacienteController::editarPaciente/$1');

// Ruta para actualizar el perfil del paciente (POST)
$routes->post('pacientes/actualizar_perfil', 'Pacientes\PacienteController::actualizarPaciente');

// Ruta para mostrar el perfil de un paciente específico por ID
$routes->get('perfil/(:num)', 'Pacientes\PacienteController::indexPerfil/$1');

// Grupo de rutas para citas médicas
$routes->group('paciente', function($routes) {
    // Ruta para mostrar las citas médicas
    $routes->get('citas', 'Pacientes\PacienteController::indexCitas');
    
    // Ruta para programar una nueva cita (POST)
    $routes->post('citas/programar', 'Pacientes\PacienteController::programarCita');
});

// En app/Config/Routes.php

/*cambio*/

/*Pagina empleados*/ 
/*Medicoas*/
$routes->get('medicos', 'MedicosController::index'); // Ruta para acceder a la página de médicos

/* Login empleados */
$routes->get('login_empleado', 'LoginEmpleadosController::LoginEmpleado');
$routes->post('login_empleado/auth', 'LoginEmpleadosController::auth'); // Usar POST para la autenticación


////Medicos
$routes->get('recetasDoctor', 'MedicosController::Recetas');
$routes->get('historialPaciente', 'MedicosController::HistorialMedico');
$routes->get('observaciones', 'MedicosController::notasMedicas');
$routes->get('pagina_doctor','CitasController::verCitasMedico');

/*Pagina empleados*/ 
$routes->get('ad-especialidades','EspecialidadesController::index');
$routes->get('buscar_especialidad/(:num)','EspecialidadesController::buscarEspecialidad/$1');
$routes->get('ad-especialidades-nuevo','EspecialidadesController::nuevaEspecialidad');
$routes->post('ad-especialidades-agregar','EspecialidadesController::agregarEspecialidad');
$routes->get('ad-especialidades-editar/(:num)','EspecialidadesController::editarEspecialidad/$1');
$routes->put('ad-especialidades-editar','EspecialidadesController::ActualizarEspecialidad');
$routes->delete('ad-especialidades-eliminar/(:num)','EspecialidadesController::EliminarEspecialidad/$1');

/*Empleado/a secretaria/o*/
$routes->get('pagina_secretaria', 'EmpleadoController::mainSecretaria');
