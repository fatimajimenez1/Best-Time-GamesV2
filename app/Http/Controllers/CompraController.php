<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(){
        return view("Compra.index");
    }
     public function insertar(){
        return view("Compra.insertar");
    }
    public function edit(){
        return view("Compra.edit");
    }

    public function reportes(){
        return view("Compra.reportes");
    }
}
