<html>
<head>
<title>Insertar Compra</title>
</head>
<link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />

<link rel="stylesheet" href="{{ asset('css/empleados.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<body>
@include('../layout-empleado/cargar') 
 <div class="container">
  
   <h3><b>Insertar Compra</b></h3>
  
  

    <form id="survey-form">
    <div class="form-group">
  
        <input name="IdProducto" type="text" class="form-control" placeholder="IdProducto" id="IdProducto" />
        </div>

        <div class="form-group">
        <input name="Cantidad de productos" type="number" class="form-control" id="Cantidad de productos" placeholder="Cantidad de productos" />
        </div>
      
      <div class="form-group">
        <input name="IdEmpleado" class="form-control" id="IdEmpleado" placeholder="IdEmpleado"></input>
        </div>
         
      <div class="form-group">
      <button type="submit" id="submit" class="submit-button">Guardar
      </button>
      <a href="{{ url('/Compra/index') }}">Regresar al Inicio</a>
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
      
</body>
</html>