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

<<<<<<< HEAD
// En app/Config/Routes.php

$routes->get('pacientes/editar/(:num)', 'Pacientes\PacienteController::editar/$1');
$routes->post('pacientes/actualizar_perfil', 'Pacientes\PacienteController::actualizar');

$routes->get('perfil/(:num)', 'Pacientes\PacienteController::perfil/$1'); // Mostrar perfil del paciente
=======
/*Pagina empleados*/ 
/*Medicoas*/
$routes->get('medicos/pagina_doctor', 'Empleado\Medicos\MedicosController::pagina_doctor');

/*Login empleados*/
$routes->get('login_empleado', 'Empleado\LoginEmpleadosController::LoginEmpleado');
>>>>>>> 507a7e6171c70786a6d42df1f8d88a8e81df6421
