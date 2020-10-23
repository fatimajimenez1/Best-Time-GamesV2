<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Playera Bebe Player 1</title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" href="{{{ asset('images/icono.png')}}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/detalle.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('css/producto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
  @include('../layout/cargar')

<div class="page">


@include('../layout/menu')

@include('../layoutPlayera/detalle-playera-niño')

@include('../layout/footer') 



    </div>

    <div class="snackbars" id="form-output-global"></div>
    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
  <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="{!! asset('js/core.min.js') !!}"></script>
  <script src="{!! asset('js/script.js') !!}"></script>
    <script type="text/javascript"  src="{!! asset('js/detalle.js') !!}"></script>
  
  </body>
</html>