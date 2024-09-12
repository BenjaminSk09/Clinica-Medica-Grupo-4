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

/*Pagina paciente*/ 
$routes->get('paciente','PacienteController::index');

/*Pagina empleados*/ 