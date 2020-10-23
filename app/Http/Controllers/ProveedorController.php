<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        return view("Proveedor.index");
    }
     public function insertar(){
        return view("Proveedor.insertar");
    }
    public function edit(){
        return view("Proveedor.edit");
    }

    public function reportes(){
        return view("Proveedor.reportes");
    }
}
