<section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="{{URL::asset('images/14.jpg')}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Colección de videojuegos</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Todo tipo de videojuegos en las diferentes consolas en existencia</p><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('VistaCliente/Videojuegos') }}" data-caption-animate="fadeInUp" data-caption-delay="300">Ver Productos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="{{URL::asset('images/2.jpeg')}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">LLegada de Nuevas Consolas</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">LLegada de las nuevas consolas Xbox Series X y PS 5</p>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('VistaCliente/consolas') }}" data-caption-animate="slideInUp" data-caption-delay="0">Ver Productos</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>
   
      <section class="section section-md bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Nuestros Productos</span></h3>
          <div class="row row-md row-30">
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="{{URL::asset('images/4.jpeg')}}" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span ><img src="{{URL::asset('images/consola-de-video.png')}}" class="services-terri-icon"></span>
                    <h5 class="services-terri-title"><a href="{{ url('VistaCliente/consolas') }}">Consolas</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"><img src="{{URL::asset('images/6.jpg')}}" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span  ><img src="{{URL::asset('images/videojuegos.png')}}" class="services-terri-icon"></span>
                    <h5 class="services-terri-title"><a href="{{ url('VistaCliente/Videojuegos') }}">Videojuegos</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="{{URL::asset('images/5.jpg')}}" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span ><img src="{{URL::asset('images/muneca.jpg')}}" class="services-terri-icon"></span>
                    <h5 class="services-terri-title"><a href="{{ url('VistaCliente/Funko') }}">Muñecos Funko</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"><img src="{{URL::asset('images/7.jpg')}}" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span ><img src="{{URL::asset('images/blusa.jpg')}}" class="services-terri-icon"></span>
                    <h5 class="services-terri-title"><a href="{{ url('VistaCliente/Playeras') }}">Playeras</a></h5>
                  </div>
                </article>
              </div>
            </div>
         
            
          </div>
        </div>
      </section>

    

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
      
     

     <br><br><br>

     <section class="section section-lg bg-default text-md-left">
      <div class="container">
        <div class="row row-60 justify-content-center flex-lg-row-reverse">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="offset-left-xl-70">
              <h3 class="heading-3">Sala de Stream</h3>
              <div class="slick-quote">
               
                <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-5" data-for="#child-carousel-5" data-slide-effect="true">
                  <div class="item">
              
                    <article class="quote-modern">
                      <h5 class="quote-modern-text"><span class="q">Visita nuestra sala de stream pa ver los nuevos videos de los nuevos videojuegos que sacamos en nuestra tienda :D.</span></h5>
                      <a class="button button-lg button-secondary button-winona wow fadeInRight" href="{{ url('/streaming') }}" data-wow-delay=".2s">Ver Stream</a>
                    </article>
                  </div>
                

                </div>
             
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-7"><iframe width="580" height="315" src="https://www.youtube.com/embed/0Xkk1FjwXAI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <br><br><br>