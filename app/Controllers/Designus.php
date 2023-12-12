<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Designus extends BaseController
{

    public function mostrarSneakers()
    {
        $sneakerModel = model('SneakerModel');
        // $session = session();
         //if($session->get('logged_in')!=TRUE){
          //   return redirect('usuario/login','refresh');
        // }
 
 
         $data['sneakers'] = $sneakerModel->findAll();
   
         return 
         view('tenis',$data);
    }


    public function mostrarMarcas()
    {
        $marcaModel = model('MarcaModel');
        // $session = session();
         //if($session->get('logged_in')!=TRUE){
          //   return redirect('usuario/login','refresh');
        // }
 
 
         $data['MarcaSneakers'] = $marcaModel->findAll();
   
         return 
         view('marcas',$data);


        }









}