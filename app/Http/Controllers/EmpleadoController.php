<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function indexEmpleado(){
        return view('Empleado.indexEmpleado');
                     }
                     public function index(){
                        return view("Empleado.index");
                    }
                     public function insertar(){
                        return view("Empleado.insertar");
                    }
                    public function edit(){
                        return view("Empleado.edit");
                    }
                
                    public function reportes(){
                        return view("Empleado.reportes");
                    }
                                    
}
