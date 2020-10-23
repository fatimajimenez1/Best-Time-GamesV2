<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view("Producto.index");
    }
     public function insertar(){
        return view("Producto.insertar");
    }
    public function edit(){
        return view("Producto.edit");
    }

    public function reportes(){
        return view("Producto.reportes");
    }
}
