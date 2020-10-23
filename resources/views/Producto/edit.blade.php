<html>
<head>
<title>Editar Producto</title>
</head>
<link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />

<link rel="stylesheet" href="{{ asset('css/empleados.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<body>
@include('../layout-empleado/cargar') 
 <div class="container">
  
   <h3><b>Editar Producto</b></h3>
    <form id="survey-form">
    <div class="form-group">
        <input name="Nombre" type="text" class="form-control" placeholder="Nombre" id="Nombre" />
        </div>

      <div class="form-group">
        <input name="Modelo" type="text"  class="form-control" id="Modelo" placeholder="Modelo" />
        </div>
      
      <div class="form-group">
        <input name="Marca"  class="form-control" id="Marca" placeholder="Marca"></input>
        </div>
      <div class="form-group">
        <input name="Categoría"  class="form-control" id="Categoría" placeholder="Categoría"></input>
        </div>
      <div class="form-group">
        <input name="Existencia"  class="form-control" id="Existencia" placeholder="Existencia"></input>
        </div>
      <div class="form-group">
        <input name="PrecioLista" type="number" class="form-control" id="PrecioLista" placeholder="PrecioLista"></input>
        </div>
         
      <div class="form-group">
      <button type="submit" id="submit" class="submit-button">Guardar
      </button>
      <a href="{{ url('/Producto/index') }}">Regresar al Inicio</a>
    </div>
     
         
     
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
      
</body>
</html>