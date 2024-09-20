<?php

namespace App\Controllers;
use App\Models\EspecialidadesModel;

class Home extends BaseController
{
    public function index(): string
    {
        $especialidades = new EspecialidadesModel();
        $datos['datos']=$especialidades->orderBy('nombre_especialidad')->findAll();
        //print_r($datos);
        return view('paciente/Vista_inicio',$datos);
    }
    public function Horarios(): string
    {
        return view('paciente/Horarios');
    }
    public function Nosotros(): string
    {
        return view('paciente/Nosotros');
    }
    public function Medicos(): string
    {
        return view('paciente/Medicos');
    }
    public function Ubicacion(): string
    {
        return view('paciente/Ubicacion');
    }
    public function Contactanos(): string
    {
        return view('paciente/Contactanos');
    }
}
