<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class NavigationController extends Controller
{
    public function index()
    {
        return view('PaginaPrincipal');
    }
}
