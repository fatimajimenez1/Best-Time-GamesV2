<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function Acerca(){
return view('Acerca');
   }

   public function index(){
    return view('welcome');
       }

       public function streaming(){
        return view('streaming');
           }
   
       public function Contacto(){
        return view('Contacto');
           }

          
       public function login(){
        return view('login');
           }

           public function Registrar(){
            return view('Registrar');
               }
}