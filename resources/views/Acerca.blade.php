<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Acerca de</title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" href="{{{ asset('images/icono.png')}}}" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
  @include('../layout/cargar')
    <div class="page">
  
    @include('../layout/menu') 

@include('../layout/seccion-acerca')

@include('../layout/footer') 

    </div>
    <div class="snackbars" id="form-output-global"></div>
 <script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
  </body>
</html>