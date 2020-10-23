<html>
<head>
<title>Insertar Empleado</title>
</head>
<link rel="shortcut icon" href="{{{ asset('images/icono.png')}}}" />

<link rel="stylesheet" href="{{ asset('css/empleados.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<body>
@include('../layout-empleado/cargar') 
 <div class="container">
  
   <h3><b>Insertar Empleado</b></h3>
  
  

    <form id="survey-form">
    <div class="form-group">
        <input name="Codigo" type="text"  class="form-control" placeholder="Codigo" id="Codigo" required/>
      </div>
      
      <div class="form-group">
        <input name="Puesto" type="text"  class="form-control" id="Puesto" placeholder="Puesto" required/>
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
        <input name="Teléfono"  class="form-control" id="Teléfono" placeholder="Teléfono" required></input>
      </div>
      <div class="form-group">
        <input name="Fecha Nacimiento"  class="form-control" id="Fecha Nacimiento" placeholder="Fecha Nacimiento" required></input>
      </div>
      <div class="form-group">
        <input name="Domicilio"  class="form-control" id="Domicilio" placeholder="Domicilio" required></input>
      </div>
      <div class="form-group">
        <input name="Nombre Usuario"  class="form-control" id="Nombre Usuario" placeholder="Nombre Usuario" required></input>
      </div>
      <div class="form-group">
        <input name="Contraseña"  class="form-control" id="Contraseña" placeholder="Contraseña" required></input>
      </div>   
         
      <div class="form-group">
      <button type="submit" id="submit" class="submit-button">Guardar
      </button>
      <a href="{{ url('/Empleado/index') }}">Regresar al Inicio</a>
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{!! asset('js/core.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
      
</body>
</html>