<!DOCTYPE html>
<html class="wide wow-animation" lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Home</title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('css/producto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <script src="{!! asset('js/jquery-3.2.1.js')!!}"></script>
  </head>
  <body>
 
@include('../layout-cliente/cargar')

    <div class="page">
  

@include('../layout-cliente/menu') 

@include('../layout-cliente/seccion-index')

@include('../layout-cliente/footer') 

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
  <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
    </body>
</html>

