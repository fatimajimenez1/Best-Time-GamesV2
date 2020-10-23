
<div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
<input type="checkbox" id="checkbox" placeholder="Menu" >
<label class="btn2  " for="checkbox" placeholder="Menu" >Menú</label>

<div class="sidebar">
    <img class="images" src="../images/Best-Time Games.png">
    <ul>
    <a href="{{ url('/Empleado/indexEmpleado') }}"><li><i class="fa fa-tachometer"></i>Inicio</li></a>
        <a href="{{ url('/Producto/index') }}"><li><i class="fa fa-tachometer"></i>Productos</li></a>
        <a href="{{ url('/Proveedor/index') }}"><li><i class="fa fa-lightbulb-o"></i>Proveedores</li></a>
        <a href="{{ url('/Empleado/index') }}"><li><i class="fa fa-line-chart"></i>Empleado</li></a>
        <a href="{{ url('/Cliente/index') }}"><li><i class="fa fa-television"></i>Clientes</li></a>
        <a href="{{ url('/Compra/index') }}"><li><i class="fa fa-send"></i>Compras</li></a>
      
        <a href="{{ url('/') }}"><li><i class="fa fa-globe"></i>Cerrar Sesión</li></a>
    </ul>
</div>
