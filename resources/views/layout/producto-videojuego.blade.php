
<section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Videojuegos</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url({{URL::asset('images/videojuegos1.jpg')}});"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Videojuegos</li>
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
 <a href="#">Xbox 360</a>
 <a href="#">Xbox One</a>
 <a href="#">Xbox Series X</a>
 <a href="#">Nintendo</a>
 <a href="#">Ps 4</a>
 <a href="#">Ps 5</a>
   </div>
 </header>
    
        <section class="grid" id="grid">
          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Destinity"
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/destinity (1).jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Destinity</h6>
                <div class="product-price-wrap">
                  <div class="product-price">$449.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleDestinity') }}" >Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>
    
          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Forza Horizon "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/forza.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Forza Horizon </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$399.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleForza') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Halo 4  "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/halo_4.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Halo 4  </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$550.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleHalo4') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          
          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Injustice  "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/injustice.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Injustice  </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$399.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleInjustice') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          
          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Gears of War 3 "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/gears3.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Gears of War 3</h6>
                <div class="product-price-wrap">
                  <div class="product-price">$229.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleGearsWar') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Left 4 Dead   "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/left.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Left 4 Dead  </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$229.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleLeft') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Left 4 Dead 2  "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/left2.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Left 4 Dead 2  </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$229.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleLeft2') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="Resident Evil 4   "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/resident.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 Resident Evil 4  </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$700.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleResident4') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox 360"
          data-etiquetas="MK9    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/mortal.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox 360 MK9   </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$299.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleMK') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

        
          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="Resident Evil 3"
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/resident3.jpeg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One Resident Evil 3 Remake   </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1,299.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleResindet3') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="Ori and the Will of the Wisps     "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/ori.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One Ori and the Will of the Wisps    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$499.00 </div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleOri') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="GTA V	     "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/gtav.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One GTA V	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$549.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleGTA') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="Warborn    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/warborn.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One Warborn	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$517.63</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/Detallewar') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          
          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="West of Dead     "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/west.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One West of Dead 	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$349.00 </div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleWest') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="Desperados 3
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/desesperados.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One Desperados 3
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1360.37</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleDesperados') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="CrossCode
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/crosscode.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One CrossCode
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$494.52</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleCrossCode') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="Sword Art Online: Alicization Lycoris
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/sword.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One Sword Art Online: Alicization Lycoris
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1499.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleSword') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas=" Rocket Arena
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/rocket.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One  Rocket Arena

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$250.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleRocket') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox one"
          data-etiquetas="Creaks
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/creaks.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox One Creaks
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$399.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleCreaks') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="Brain Training
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/brain.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch Brain Training
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$667.25</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleBrain') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="To the Moon

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/moon.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch To the Moon

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$296.42</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleMoon') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="Untold Stories
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/untold.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch Untold Stories
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$864.04</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleStories') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="
     SEGA AGES Fantasy Zone
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/sega.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch SEGA AGES Fantasy Zone
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$197.53</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleSega') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="Kentucky Route Zero TV Edition

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/ken.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch Kentucky Route Zero TV Edition

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$527.65</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleKentucky') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="Saints Row 4: Re-Elected

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/row.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch Saints Row 4: Re-Elected

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1499.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleSaints') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="Zombie Army Trilogy

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/zombie.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch Zombie Army Trilogy

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$788.24</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleZombie') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas=" Picross S4

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/picross.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch  Picross S4

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$485.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetallePicross') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="Telling Lies
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/tell.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch Telling Lies
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$419.82</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleTelling') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="nintendo"
          data-etiquetas="Arrest of a stone Buddha
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/arrest.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Nintendo Switch Arrest of a stone Buddha
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$370.40</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleArrest') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="Assassin's Creed: Valhalla 
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/creed.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5 Assassin's Creed: Valhalla 
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$2469.75</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleAssassin') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="     Control: Ultimate Edition
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/control.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5   Control: Ultimate Edition
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1500.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleControl') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="      Outriders
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/out.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5  Outriders
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1350.20</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleOutriders') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>
          
          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="     Chivalry II 
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/chiva.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5   Chivalry II 
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1370.40</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleChivalry') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas=" Haven
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/haven.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5  Haven
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1450.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleHaven') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas=" Maquette 
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/maque.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5  Maquette 
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1120.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleMaquette') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="Watch Dogs Legion 
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/watch.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5  Watch Dogs Legion 
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$2100.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleWhatchDogs') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="     Hitman III
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/hitman.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5    Hitman III
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$2130.40</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleHitman') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="Far Cry 6
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/far.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5  Far Cry 6 
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1780.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleFarCry') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="ps 5"
          data-etiquetas="Balan Wonderworld
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/balan.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 5 Balan Wonderworld 
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1270.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleBalanWonderworld') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas="GTA V
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/gtav_1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X GTA V
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$549.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleGTAV') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas="Control: Ultimate Edition
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/control1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X Control: Ultimate Edition
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$700.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"href="{{ url('/DetalleProductoVideojuegos/DetalleControl2') }}" >Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas="The Medium

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/medi1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X The Medium

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$999.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleTheMedium') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas="Outriders

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/out1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X Outriders

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$899.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleOutriders2') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas="Planet Coaster: Console Edition
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/planet1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X Planet Coaster: Console Edition
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$799.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetallePlanetCoaster') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas=" Call of the Sea

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/call2.png')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X  Call of the Sea

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$599.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleCalloftheSea') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas=" Chivalry II
    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/chi1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X  Chivalry II
	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$650.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleChivalryII') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas="Haven

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/haven11.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X  Haven

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$650.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleHaven2') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas=" Yakuza: Like a Dragon

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/yaku1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X  Yakuza: Like a Dragon

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$950.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleYakuzaLikeaDragon') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          <div class="item" 
          data-categoria="xbox series x"
          data-etiquetas=" Far Cry 6


    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/far11.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Xbox Series X  Far Cry 6

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$999.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleFarCry6') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


        
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas=" My Hero One's Justice 2

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/hero1.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 My Hero One's Justice 2

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$999.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleMyHero') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas=" Resident Evil 3

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/resident-evil.jpeg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 Resident Evil 3

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1299.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleResidentEvil') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas=" Saints Row: The Third – Remastered


    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/sain.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 Saints Row: The Third – Remastered

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1199.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleSaints2') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas="Warborn

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/war.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 Warborn

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$950.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleWarborn2') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas="The Last of Us Part 2

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/platz.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 The Last of Us Part 2

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1399.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleLast') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>

          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas="Star Wars Episode I: Race

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/star.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 Star Wars Episode I: Race

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$374.93</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleStar') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas="Destroy All Humans!

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/humans.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 Destroy All Humans!

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$750.10</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleHumans') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas="Fast & Furious Crossroads

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/fast.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 Fast & Furious Crossroads

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1549.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="{{ url('/DetalleProductoVideojuegos/DetalleFast') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas="UFC 4


    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/ufc.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 UFC 4


	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$1299.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleUFC') }}">Ver Producto</a></div>
            
              </article>
            </div>
         
          </div>


          
          <div class="item" 
          data-categoria="ps 4"
          data-etiquetas="Spiritfarer

    "
          >
            <div class="item-contenido">
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="{{URL::asset('images/spir.jpg')}}" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">PS 4 Spiritfarer

	    </h6>
                <div class="product-price-wrap">
                  <div class="product-price">$750.10</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><button  type="button" class="button button-xs button-primary button-winona" data-toggle="modal" data-target="#bottom_modal"	onClick="cartLS.add({id: 3, name: 'Puma St Runner', price: 130})" >Agregar al Carrito</button></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoVideojuegos/DetalleSpiritfarer') }}">Ver Producto</a></div>
            
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
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona"  href="{{ url('/DetalleProductoFunko  /DetalleHulkbuster') }}">Ver Producto</a></div>
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
      
      