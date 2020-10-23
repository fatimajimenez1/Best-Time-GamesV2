<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>  <title>Producto</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />
 <link rel="stylesheet" type="text/css"href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('css/empleado-index.css')}}">

@include('../layout-empleado/menu') 
@include('../layout-empleado/seccion-producto')
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
     
  <script src="{!! asset('js/empleado.js') !!}"></script>
  </body>
</html>