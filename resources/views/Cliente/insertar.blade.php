<html>
<head>
<title>Insertar Cliente</title>
</head>
<link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />

<link rel="stylesheet" href="{{ asset('css/empleados.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<body>
@include('../layout-empleado/cargar') 
 <div class="container">
  
   <h3><b>Insertar Cliente</b></h3>
  
  

    <form id="survey-form">
    <div class="form-group">
        <input name="Codigo" type="text"  class="form-control" placeholder="Codigo" id="Codigo" required/>
      </div>
    
      <div class="form-group">
        <input name="Nombre"  class="form-control" id="Nombre" placeholder="Nombre" required></input>
      </div>
      <div class="form-group">
        <input name="Apellido Paterno"  class="form-control" id="Apellido Paterno" placeholder="Apellido Paterno" required></input>
      </div>
      <div class="form-group">
        <input name="Apellido Materno"  class="form-control" id="Apellido Materno" placeholder="Apellido Materno" required></input>
      </div>
      <div class="form-group">
      <input name="Rfc" type="text" class="form-control" id="Rfc" placeholder="Rfc" />
      </div>
      <div class="form-group">
      <input name="Codigo postal" type="text" class="form-control" id="Codigo postal" placeholder="Codigo postal" />
      </div>
      <div class="form-group">
        <input name="Direccion"  class="form-control" id="Direccion" placeholder="Direccion" required></input>
      </div>
      <div class="form-group">
        <input name="Teléfono"  class="form-control" id="Teléfono" placeholder="Teléfono" required></input>
      </div>
      <div class="form-group">
        <input name="Imagen"  class="form-control" id="Imagen" placeholder="Imagen"></input>
        </div>
      <div class="form-group">
        <input name="Correo electrónico"  class="form-control" id="Correo electrónico" placeholder="Correo electrónico"></input>
        </div>
 
      <div class="form-group">
        <input name="Estatus"  type="checkbox" class="form-control" id="Estatus" placeholder="Estatus" required></input>
      </div>
     
         
      <div class="form-group">
      <button type="submit" id="submit" class="submit-button">Guardar
      </button>
      <a href="{{ url('/Cliente/index') }}">Regresar al Inicio</a>
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
      
</body>
</html>