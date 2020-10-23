<div class="modal bottom fade" id="bottom_modal" tabindex="-1" role="dialog" aria-labelledby="bottom_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Carrito de Compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Se ah agregado el producto al carrito de compras exitosamente!<a href="{{ url('/carrito') }}">Ver productos</a></p>
      </div>
      <div class="modal-footer modal-footer-fixed d-none">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
<header class="section page-header">
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <div class="rd-navbar-brand"><a class="brand" href="{{ url('/') }}"><img class="brand-logo-dark" src="{{URL::asset('images/Best-Time Games.png')}}" alt="" width="198" height="66"/></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-main">
                   <nav>
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ url('/') }}" style="font-size:16px;">Inicio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/Acerca') }}" style="font-size:16px;">Acerca de</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/streaming') }}" style="font-size:16px;">Stream</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/Contacto') }}" style="font-size:16px;">Contacto</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/login') }}" style="font-size:16px;">Login</a>
                      </li>
                    </ul>
                 </nav>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </header>