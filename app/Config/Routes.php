<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('paciente','PacienteController::index');
$routes->get('inicio','InicioController::index');