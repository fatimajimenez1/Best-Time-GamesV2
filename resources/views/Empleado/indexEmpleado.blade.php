<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>  <title>Inicio Empleado</title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{ asset('css/empleado-index.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
  <body>
    
  

@include('../layout-empleado/menu')

@include('../layout-empleado/seccion-index')


<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
     
  <script src="{!! asset('js/empleado.js') !!}"></script>  
  </body>
</html>