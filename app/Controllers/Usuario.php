<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuario extends BaseController
{
    //protected $helpers = ['form'];

    public function index()
    {
        //
    }

    public function mostrar(){
        $usuarioModel = model('UsuarioModel');
       // $session = session();
        //if($session->get('logged_in')!=TRUE){
         //   return redirect('usuario/login','refresh');
       // }

        $data['usuarios'] = $usuarioModel->findAll();
  
        return 
        view('common/head') .
        view('common/menu') .
        view('usuario/mostrar',$data) .
        view('common/footer');
    }

    public function agregar()
    {
        $data['title'] = "Ingresar nuevo usuario";
        $validation =  \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head', $data) .
            view('usuario/agregar') .
            view('common/footer');
        }

        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required',
            'contrasena' => 'required',
            'direccion' => 'required',
            'ciudad' => 'required',
            'codigo_postal' => 'required',
            'pais' => 'required',
    
        ];

        if (!$this->validate($rules)) {
            return view('common/head', $data) .
        view('usuario/agregar',['validation' => $validation]) .
        view('common/footer');
        } else{

            if ($this->insert()) {
                return redirect('usuario/mostrar', 'refresh');
            }
        }

    }

    public function insert(){
        $usuarioModel = model('UsuarioModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "correo" => $_POST['correo'],
            "contrasena" => $_POST['contrasena'],
            "direccion" => $_POST['direccion'],
            "ciudad" => $_POST['ciudad'],
            "codigo_postal" => $_POST['codigo_postal'],
            "pais" => $_POST['pais']

        ];
        $usuarioModel->insert($data, false);
        return redirect('usuario/mostrar','refresh');
    }

    public function delete($id){
        $usuarioModel = model('UsuarioModel');
        $usuarioModel->delete($id);
        return redirect('usuario/mostrar','refresh');
    }

    public function editar($id){
        $usuarioModel = model('UsuarioModel');
        $data['usuario'] = $usuarioModel->find($id);

        return 
        view('common/head') .
        view('common/menu') .
        view('usuario/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $usuarioModel = model('UsuarioModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "correo" => $_POST['correo'],
            "contrasena" => $_POST['contrasena'],
            "direccion" => $_POST['direccion'],
            "ciudad" => $_POST['ciudad'],
            "codigo_postal" => $_POST['codigo_postal'],
            "pais" => $_POST['pais']

        ];
        $usuarioModel->update($_POST['id'],$data);
        return redirect('usuario/mostrar','refresh');
    }


    public function estadistica(){

    }



}