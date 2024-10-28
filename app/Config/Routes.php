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
$routes->get('pacientes/(:num)', 'Pacientes\PacienteController::indexPacientes');// Ruta para mostrar la lista de pacientes
$routes->get('citas-medicas', 'Pacientes\PacienteController::indexCitas');// Ruta para mostrar las citas médicas
$routes->get('recetas', 'Pacientes\PacienteController::indexRecetas');// Ruta para mostrar las recetas
$routes->get('paciente/perfil', 'Pacientes\PacienteController::indexPerfil'); // Nueva ruta para el perfil

$routes->get('pacientes/editar/(:num)', 'Pacientes\PacienteController::editarPaciente/$1');// Ruta para editar el perfil del paciente
$routes->post('pacientes/actualizar_perfil', 'Pacientes\PacienteController::actualizarPaciente');// Ruta para actualizar el perfil del paciente (POST)
$routes->get('perfil/(:num)', 'Pacientes\PacienteController::indexPerfil/$1');// Ruta para mostrar el perfil de un paciente específico por ID



/*Login Pacientes */
$routes->get('login_paciente', 'Pacientes\LoginPacientesController::loginPaciente');
$routes->post('login_paciente/auth', 'Pacientes\LoginPacientesController::auth');/// login nuevo prueba pacientes
$routes->get('logout_paciente', 'Pacientes\LoginPacientesController::logout');

/* ruta para cita medica*/
$routes->post('paciente/citas/programar', 'Pacientes\PacienteController::programarCita');
$routes->get('paciente/citas', 'Pacientes\PacienteController::indexCitas');
$routes->post('paciente/citas/eliminar', 'Pacientes\PacienteController::eliminarCita');



/*Pagina empleados*/ 
/*Medicoas*/
$routes->get('medicos', 'MedicosController::index'); // Ruta para acceder a la página de médicos

/* Login empleados */
$routes->get('login_empleado', 'LoginEmpleadosController::LoginEmpleado');
$routes->post('login_empleado/auth', 'LoginEmpleadosController::auth'); // Usar POST para la autenticación


////Medicos
$routes->get('pagina_doctor', 'CitasController::verCitasMedico'); // Mostrar citas pendientes
$routes->get('pacientes_atendidos', 'CitasController::listarPacientesAtendidos'); // Mostrar pacientes atendidos
$routes->post('citas/marcar_recibido/(:num)', 'CitasController::marcarRecibido/$1'); // Cambiar estado a recibido
// Ruta para el formulario de receta
// Rutas para DetalleCitas
$routes->get('detalle_citas/formulario_receta/(:num)', 'DetalleCitasController::formularioReceta/$1');
$routes->post('detalle_citas/guardar_receta', 'DetalleCitasController::guardarReceta');
$routes->get('detalle_citas/formulario_tratamiento/(:num)', 'DetalleCitasController::formularioTratamiento/$1');
$routes->post('detalle_citas/guardar_tratamiento', 'DetalleCitasController::guardarTratamiento');
$routes->get('detalle_citas/formulario_nota_medica/(:num)', 'DetalleCitasController::formularioNotaMedica/$1');
$routes->post('detalle_citas/guardar_nota_medica', 'DetalleCitasController::guardarNotaMedica');



/*Pagina especialidades*/ 
$routes->get('ad-especialidades','EspecialidadesController::index');
$routes->get('buscar_especialidad/(:num)','EspecialidadesController::buscarEspecialidad/$1');
$routes->get('ad-especialidades-nuevo','EspecialidadesController::nuevaEspecialidad');
$routes->post('ad-especialidades-agregar','EspecialidadesController::agregarEspecialidad');
$routes->get('ad-especialidades-editar/(:num)','EspecialidadesController::editarEspecialidad/$1');
$routes->post('ad-especialidades-editar','EspecialidadesController::ActualizarEspecialidad');
$routes->get('ad-especialidades-eliminar/(:num)','EspecialidadesController::EliminarEspecialidad/$1');
//cierre sesion
$routes->get('logout', 'LoginEmpleadosController::logout');


/*Empleado/a secretaria/o*/
$routes->get('ad_empleados', 'EmpleadoController::index');
$routes->get('ad_buscar_empleado/(:num)','EmpleadoController::buscar/$1');
$routes->get('ad-empleado-nuevo','EmpleadoController::nuevo');
$routes->post('ad-empleado-agregar','EmpleadoController::agregar');
$routes->get('ad-empleado-editar/(:num)','EmpleadoController::editar/$1');
$routes->post('ad-empleado-editar/(:num)','EmpleadoController::Actualizar/$1');
$routes->get('ad-empleado-eliminar/(:num)','EmpleadoController::Eliminar/$1');

/*Empleado/a Médico/o*/
$routes->get('ad_medicos', 'MedicosController::index');
$routes->get('ad_buscar_medico/(:num)','MedicosController::buscar/$1');
$routes->get('ad-medico-nuevo','MedicosController::nuevo');
$routes->post('ad-medico-agregar','MedicosController::agregar');
$routes->get('ad-medico-editar/(:num)','MedicosController::editar/$1');
$routes->post('ad-medico-editar','MedicosController::Actualizar');
$routes->get('ad-medico-eliminar/(:num)','MedicosController::Eliminar/$1');

/*Link de login de secretaria nomas esntra se muestra la pagina de CItas*/
$routes->get('pagina_secretaria', 'EmpleadoController::mainSecretaria');

// Nueva ruta para manejar errores de login
$routes->get('error_login', 'LoginEmpleadosController::errorLogin');
