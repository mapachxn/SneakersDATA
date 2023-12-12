<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Marca extends BaseController
{
    //protected $helpers = ['form'];

    public function index()
    {
        //
    }

    public function mostrar(){
        $marcaModel = model('MarcaModel');
       // $session = session();
        //if($session->get('logged_in')!=TRUE){
         //   return redirect('usuario/login','refresh');
       // }


        $data['MarcaSneakers'] = $marcaModel->findAll();
  
        return 
        view('common/head') .
        view('common/menu') .
        view('marca/mostrar',$data) .
        view('common/footer');
    }

    public function agregar()
    {
        $data['title'] = "Agregar nueva marca";
        $validation =  \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head', $data) .
            view('marca/agregar') .
            view('common/footer');
        }

        $rules = [
            'nombre_fundacion' => 'required',
            'creacion' => 'required',
            'pais_origen' => 'required',
            'estado_origen' => 'required',
            'sitio_web' => 'required',
    
        ];

        if (!$this->validate($rules)) {
            return view('common/head', $data) .
        view('marca/agregar',['validation' => $validation]) .
        view('common/footer');
        } else{

            if ($this->insert()) {
                return redirect('marca/mostrar', 'refresh');
            }
        }

    }

    public function insert(){
        $marcaModel = model('MarcaModel');
        $data = [
            "nombre_fundacion" => $_POST['nombre_fundacion'],
            "creacion" => $_POST['creacion'],
            "pais_origen" => $_POST['pais_origen'],
            "estado_origen" => $_POST['estado_origen'],
            "sitio_web" => $_POST['sitio_web']
        ];
        $marcaModel->insert($data, false);
        return redirect('marca/mostrar','refresh');
    }

    public function delete($id){
        $marcaModel = model('MarcaModel');
        $marcaModel->delete($id);
        return redirect('marca/mostrar','refresh');
    }

    public function editar($id){
        $marcaModel = model('MarcaModel');
        $data['marca'] = $marcaModel->find($id);

        return 
        view('common/head') .
        view('common/menu') .
        view('marca/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $marcaModel = model('MarcaModel');
        $data = [
            "nombre_fundacion" => $_POST['nombre_fundacion'],
            "creacion" => $_POST['creacion'],
            "pais_origen" => $_POST['pais_origen'],
            "estado_origen" => $_POST['estado_origen'],
            "sitio_web" => $_POST['sitio_web']
        ];
        $marcaModel->update($_POST['id'],$data);
        return redirect('marca/mostrar','refresh');
    }


    public function estadistica(){

    }



}