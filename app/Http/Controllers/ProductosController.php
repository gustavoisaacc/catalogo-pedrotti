<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function index(){
        $productos = Productos::All();

        return view('pages/index', compact('productos'));
    }
}
