<?php

namespace App\Controllers;
use App\Models\EspecialidadesModel;

class EspecialidadesController extends BaseController
{
    public function index()
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
    public function nuevaEspecialidad(){
        return view('admin/form_agregar_especialidad');
    }
    public function agregarEspecialidad(){
        $especialidades=new EspecialidadesModel();
        $datos=[
            'nombre_especialidad'=>$this->request->getPost('txtName'),
            'descripcion'=>$this->request->getPost('txtDescripcion'),
            'imagen'=>'https://i0.wp.com/cardiomedicgt.com/wp-content/uploads/2023/09/1.png?fit=1920%2C1280&ssl=1',
        ];
       // print_r($datos);
       $especialidades->insert($datos);
       
       $mensaje=[
        'mensaje'=>'Especialidad guardada',
        'ruta'=>'ad-especialidades'
    ];
       return view('admin/mensaje',$mensaje);

    }
    public function EliminarEspecialidad($id=null){
        $especialidades=new EspecialidadesModel();
        $mensaje =$especialidades->delete($id);
        return $this->index();


    }
    public function ActualizarEspecialidad(){
        $especialidades=new EspecialidadesModel();
        $id =$this->request->getPost('txtId');

        $datos=[
            'nombre_especialidad'=>$this->request->getPost('txtName'),
            'descripcion'=>$this->request->getPost('txtDescripcion'),
            'imagen'=>'https://i0.wp.com/cardiomedicgt.com/wp-content/uploads/2023/09/1.png?fit=1920%2C1280&ssl=1',
        ];
       // print_r($datos);
       $especialidades->update($id,$datos);
       
       $mensaje=[
        'mensaje'=>'datos  modificados',
        'ruta'=>'ad-especialidades'
    ];
       return view('admin/mensaje',$mensaje);
    
    }
    

}   