<html>
<head>
<title>Insertar Proveedor</title>
</head>
<link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />

<link rel="stylesheet" href="{{ asset('css/empleados.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<body>
@include('../layout-empleado/cargar') 
 <div class="container">
  
   <h3><b>Insertar Proveedor</b></h3>
  
  

    <form id="survey-form">
    
      <div class="form-group">
        <input name="Nombre"  class="form-control" id="Nombre" placeholder="Nombre" required></input>
      </div>
      <div class="form-group">
        <input name="Domicilio"  class="form-control" id="Domicilio" placeholder="Domicilio" required></input>
      </div>
      <div class="form-group">
      <input name="Telefono" type="text" class="form-control" id="Telefono" placeholder="Telefono" />
      </div>
 
      <div class="form-group">
        <input name="Estatus"  type="checkbox" class="form-control" id="Estatus" placeholder="Estatus" required></input>
      </div>
     
         
      <div class="form-group">
      <button type="submit" id="submit" class="submit-button">Guardar
      </button>
      <a href="{{ url('/Proveedor/index') }}">Regresar al Inicio</a>
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
      
</body>
</html>