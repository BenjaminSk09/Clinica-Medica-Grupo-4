<?php
namespace App\Controllers;
use App\Models\EmpleadosModel;
use App\Models\GenerosModel;
use App\Models\TipoUsuarioModel;
use App\Models\EmpresasModel;

class EmpleadoController extends BaseController
{  
    //Esto es la parte de Secretaria
    public function mainSecretaria()
    {
        return view('empleado/secretaria/pagina_secretaria');
    }

    public function index()
    {
        $empleado = new EmpleadosModel();
        //$datos['datos']=$empleado->orderBy('apellido')->findAll();
        $datos['datos']=$empleado->empleadosPuestos();
        //print_r($datos);
        return view('admin/empleados',$datos);
    }
    public function buscar($id){
        $genero=new GenerosModel();
        $datos['generos']=$genero->findAll();

        $tipoUsuario=new TipoUsuarioModel();
        $datos['tipos']=$tipoUsuario->findAll();

        $empresa=new EmpresasModel();
        $datos['empresas']=$empresa->findAll();

        $empleado=new EmpleadosModel();
        $datos['datos']=$empleado->where('id_empleado',$id)->first();
        return view('admin/form_modificar_empleado',$datos);
    }
    public function nuevo(){
        $genero=new GenerosModel();
        $datos['generos']=$genero->findAll();

        $tipoUsuario=new TipoUsuarioModel();
        $datos['tipos']=$tipoUsuario->findAll();

        $empresa=new EmpresasModel();
        $datos['empresas']=$empresa->findAll();


        return view('admin/form_agregar_empleado',$datos);
    }
    public function agregar(){
        $empleado=new EmpleadosModel();
        $datos=[
            'id_empresa'=>$this->request->getPost('ls_empresa'),
            'id_genero'=>$this->request->getPost('ls_genero'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_email'),
            'id_tipo_usuario'=>$this->request->getPost('ls_tipo'),
            'activo'=>1,
            'contrasena'=>$this->request->getPost('txt_contrasena'),
            'fecha_contratacion'=>date("Y-m-d H:i:s"),
            'imagen_url'=>$this->request->getPost('txt_image'),
            
        ];
       // print_r($datos);
       $empleado->insert($datos);
       
       $mensaje=[
        'mensaje'=>'empleado guardado',
        'ruta'=>'ad_empleados'
    ];
       return view('admin/mensaje',$mensaje);

    }
    public function Eliminar($id=null){
        $empleado=new EmpleadosModel();
        $mensaje =$empleado->delete($id);
        return $this->index();


    }
    public function Actualizar($id=null){
        $empleado=new EmpleadosModel();

        $datos=[
            'id_empresa'=>$this->request->getPost('ls_empresa'),
            'id_genero'=>$this->request->getPost('ls_genero'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'apellido'=>$this->request->getPost('txt_apellido'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_email'),
            'id_tipo_usuario'=>$this->request->getPost('ls_tipo'),
            'contrasena'=>$this->request->getPost('txt_contrasena'),    
            'imagen_url'=>$this->request->getPost('txt_image'),
            
        ];
       // print_r($datos);
       $empleado->update($id,$datos);
       
       $mensaje=[
        'mensaje'=>'datos  modificados',
        'ruta'=>'ad_empleados'
    ];
       return view('admin/mensaje',$mensaje);
    
    }
    

}   