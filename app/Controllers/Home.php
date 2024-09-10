<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('form_agregar_paciente.php');
    }
}
