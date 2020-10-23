
<section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Consolas</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/Impuesto-a-consolas-y-videojuegos-.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Consolas</li>
          </ul>
        </div>
      </section>
      <div class="container">
 
 <header>
  
   <form action="">
     <input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
   </form>
   <div class="categorias" id="categorias">
     <a href="#" class="activo">Todos</a>
 <a href="#">Xbox </a>

 <a href="#">Nintendo</a>
 <a href="#">Ps</a>
   </div>
 </header>
    
        <section class="grid" id="grid">
          <div class="item" 
          data-categoria="xbox "
          data-etiquetas="xbox 360"
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/consola xbox 360.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$4,299.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoConsolas/DetalleXbox360') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>
    
          <div class="item"
          data-categoria="xbox "
          data-etiquetas="xbox one s"
            
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/consola xbox one.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox one S</h6>
                <div class="product-price-wrap">
                  <div class="product-price">$7,200</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoConsolas/DetalleXboxS') }}">Ver Producto</a></div>
            
              </article>
            </div>
          </div>
    
          <div class="item"
          data-categoria="xbox "
          data-etiquetas="xbox series x"
            
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/xbox-series-x-2.jpeg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$11,170.73</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoConsolas/DetalleSeriesX') }}">Ver Producto</a></div>
                  <span class="product-badge product-badge-new">New</span>
              </article>
            </div>
          </div>
    
          <div class="item"
          data-categoria="nintendo"
             data-etiquetas="nintendo swtich"
             data-descripcion="4.- Lorem ipsum dolor sit amet consectetur."
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/nintendo.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$8690.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoConsolas/DetalleNintendo') }}">Ver Producto</a></div>
             
              </article>
            </div>
          </div>
    
          <div class="item"
          data-categoria="ps"
             data-etiquetas="ps 4"
            
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/ps 4.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$9,112.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoConsolas/DetallePS4') }}">Ver Producto</a></div>
                
                </article>
            </div>
          </div>
    
          <div class="item"
             data-categoria="ps"
             data-etiquetas="ps 5"
             data-descripcion="6.- Lorem ipsum dolor sit amet consectetur."
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/ps 5.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5 </h6>
                <div class="product-price-wrap">
                 <div class="product-price">$13,999.00</div>
                </div>
                <div class="product-button">
                 <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
                 <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoConsolas/DetallePS5') }}">Ver Producto</a></div>
                 <span class="product-badge product-badge-new">New</span>
                </article>
            </div>
          </div>
          
          
        </section>
    
        <section class="overlay" id="overlay">
          <div class="contenedor-img">
            <button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
            <img src="" alt="">
          </div>
          <p class="descripcion"></p>
        </section>
    
       
      </div>
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Mas Productos</span></h3>
          <div class="row row-lg row-30">
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="{{URL::asset('images/xbox-series-x-2.jpeg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star "></span>
                </div>
                <h6 class="product-title">Xbox Series X</h6>
                <div class="product-price-wrap">
                  <div class="product-price">$11170.73</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoConsolas/DetalleSeriesX') }}">Ver Producto</a></div>
                </div><span class="product-badge product-badge-new">New</span>
                
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/sony-ps-5-2.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5</h6>
                <div class="product-price-wrap">
                  <div class="product-price">$13,999.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap">                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoConsolas/DetallePS5') }}">Ver Producto</a></div>
                </div><span class="product-badge product-badge-new">New</span>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <article class="product wow fadeInLeft" data-wow-delay=".05s">
                <div class="product-figure"><img src="{{URL::asset('images/Figura-POP-Marvel-Avengers-Infinity-War-Hulkbuster-15cm.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star "></span>
                </div>
                <h6 class="product-title">Funko Hulkbuster</h6>
                <div class="product-price-wrap">
                  <div class="product-price">$599.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap">                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoFunko/DetalleHulkbuster') }}">Ver Producto</a></div>
                </div><span class="product-badge product-badge-new">New</span>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <article class="product wow fadeInLeft">
                <div class="product-figure"><img src="{{URL::asset('images/5d360b02bb0ae-81cef603-9f4b-4563-b693-6d415f3aec06-1600x1600.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Funko Harley Quinn</h6>
                <div class="product-price-wrap">
                  <div class="product-price">$599.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap">                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</a></div>
Agregar al Carrito</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoFunko/DetalleHarley') }}">Ver Producto</a></div>
                </div><span class="product-badge product-badge-new">New</span>
              </article>
            </div>
          </div>
        </div>
      </section>
      
      