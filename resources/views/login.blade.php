<!DOCTYPE HTML>
<html>
	<head>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
	<title>Best-Time Games</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="{{ asset('css/login_css.css') }}">
    <link rel="icon" type="image/png" href="{{{ asset('images/icono.png')}}}" />
 </head>
 <body>
    <div class="bg-img">
      <div class="content">
        <header>Iniciar Sesión</header>
        <form action="#">
          <div class="field">
            <span class="fa-user"></span>
            <input type="text" required placeholder="Usuario">
          </div>
          <div class="field space">
            <span class="fa-lock"></span>
            <input type="password" class="pass-key" required placeholder="Contraseña">
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
            <a href="#">Olvidaste tu contraseña?</a>
          </div>
          <div class="panel">
  <button type="submit" href="{{ url('/Empleado/indexEmpleado') }}">Entrar</button>
          </div>
        </form>
        
        <div class="signup">No tienes cuenta?
          <a href="{{ url('/Registrar') }}">Registrate ahora</a>
        </div><br>
        <div class="pass">
          <a href="{{ url('/') }}">Regresar a la pagina principal</a>
        </div>
      </div>
    </div>
  </body>
  </html>