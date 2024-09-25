<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*Pafina principal*/ 
$routes->get('/', 'Home::index');
$routes->get('Horarios','Home::Horarios');
$routes->get('Nosotros','Home::Nosotros');
$routes->get('Medicos','Home::Medicos');
$routes->get('Ubicacion','Home::Ubicacion');
$routes->get('Contactanos','Home::Contactanos');

/*Pagina paciente*/ 
$routes->get('paciente', 'Pacientes\PacienteController::index');

$routes->get('citas-medicas', 'Pacientes\CitaMedicaController::index');
$routes->get('recetas', 'Pacientes\RecetasController::index');
$routes->get('paciente/(:num)', 'Pacientes\PerfilController::index/$1');
$routes->get('pacientes/editar/(:num)', 'Pacientes\PacienteController::editar/$1');
$routes->post('pacientes/actualizar_perfil', 'Pacientes\PacienteController::actualizar');
$routes->get('perfil/(:num)', 'Pacientes\PacienteController::index/$1'); // Mostrar perfil del paciente
// En app/Config/Routes.php

/*cambio*/

/*Pagina empleados*/ 
/*Medicoas*/
$routes->get('medicos/pagina_doctor', 'MedicosController::index');
$routes->get('medicos', 'MedicosController::index'); // Ruta para acceder a la página de médicos

/* Login empleados */
$routes->get('login_empleado', 'LoginEmpleadosController::LoginEmpleado');
$routes->post('login_empleado/auth', 'LoginEmpleadosController::auth'); // Usar POST para la autenticación
