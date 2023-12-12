<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sneaker extends BaseController
{
    //protected $helpers = ['form'];

    public function index()
    {
        //
    }

    public function mostrar(){
        $sneakerModel = model('SneakerModel');
       // $session = session();
        //if($session->get('logged_in')!=TRUE){
         //   return redirect('usuario/login','refresh');
       // }


        $data['sneakers'] = $sneakerModel->findAll();
  
        return 
        view('common/head') .
        view('common/menu') .
        view('sneaker/mostrar',$data) .
        view('common/footer');
    }

    public function agregar()
    {
        $data['title'] = "Agregar nueva silueta";
        $validation =  \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head', $data) .
            view('sneaker/agregar') .
            view('common/footer');
        }

        $rules = [
            'nombre_sneaker' => 'required',
            'categoria' => 'required',
            'descripcion' => 'required',
            'status' => 'required',
            'stock' => 'required',
    
        ];

        if (!$this->validate($rules)) {
            return view('common/head', $data) .
        view('sneaker/agregar',['validation' => $validation]) .
        view('common/footer');
        } else{

            if ($this->insert()) {
                return redirect('sneaker/mostrar', 'refresh');
            }
        }

    }

    public function insert(){
        $sneakerModel = model('SneakerModel');
        $data = [
            "nombre_sneaker" => $_POST['nombre_sneaker'],
            "categoria" => $_POST['categoria'],
            "descripcion" => $_POST['descripcion'],
            "status" => $_POST['status'],
            "stock" => $_POST['stock']
        ];
        $sneakerModel->insert($data, false);
        return redirect('sneaker/mostrar','refresh');
    }

    public function delete($id){
        $sneakerModel = model('SneakerModel');
        $sneakerModel->delete($id);
        return redirect('sneaker/mostrar','refresh');
    }

    public function editar($id){
        $sneakerModel = model('SneakerModel');
        $data['sneaker'] = $sneakerModel->find($id);

        return 
        view('common/head') .
        view('common/menu') .
        view('sneaker/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $sneakerModel = model('SneakerModel');
        $data = [
            "nombre_sneaker" => $_POST['nombre_sneaker'],
            "categoria" => $_POST['categoria'],
            "descripcion" => $_POST['descripcion'],
            "status" => $_POST['status'],
            "stock" => $_POST['stock']
        ];
        $sneakerModel->update($_POST['id'],$data);
        return redirect('sneaker/mostrar','refresh');
    }


    public function estadistica(){

    }



}