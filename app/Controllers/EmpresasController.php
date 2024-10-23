<?php

namespace App\Controllers;

use App\Models\EmpresasModel;

class EmpresasController extends BaseController
{
    public function verClinicas()
    {
        $empresas = new EmpresasModel();
        $datos['datos']=$empresas->findAll();
        return view('paciente/home_reservas',$datos);
        print_r($datos);

        }

        


    /*
    public function nuevaEmpresa(){
        return view('empresas_nuevas');
    }*/

    
    

}