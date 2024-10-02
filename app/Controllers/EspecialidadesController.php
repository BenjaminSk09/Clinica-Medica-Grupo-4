<?php

namespace App\Controllers;
use App\Models\EspecialidadesModel;

class EspecialidadesController extends BaseController
{
    public function index(): string
    {
        $especialidades = new EspecialidadesModel();
        $datos['datos']=$especialidades->orderBy('id_especialidad')->findAll();
        //print_r($datos);
        return view('admin/especialidades',$datos);
    }
    public function buscarEspecialidad($id){
        $especialidades=new EspecialidadesModel();
        $datos['datos']=$especialidades->where('id_especialidad',$id)->first();
        return view('admin/form_modificar_especialidad',$datos);
    }
}