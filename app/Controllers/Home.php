<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('paciente/Vista_inicio');
    }
    public function Horarios(): string
    {
        return view('paciente/Horarios');
    }
    public function Nosotros(): string
    {
        return view('paciente/Nostros');
    }
}
