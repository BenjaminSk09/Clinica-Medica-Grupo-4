<?php

namespace App\Controllers;

use App\Models\CitasModel;

class CitasController extends BaseController
{
    public function verCitasMedico()
    {
        $citas = new CitasModel();
        $datos['datos']=$citas->findAll();
        return view('empleado/medicos/pagina_doctor',$datos);
        //print_r($datos);

        }

        


    

}

