<section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="{{URL::asset('images/14.jpg')}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Colección de videojuegos</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Todo tipo de videojuegos en las diferentes consolas en existencia</p><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('/login') }}" data-caption-animate="fadeInUp" data-caption-delay="300">Ver Productos</a>
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
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('/login') }}" data-caption-animate="slideInUp" data-caption-delay="0">Ver Productos</a></div>
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
   
        <section class="section section-xl bg-default">
          <div class="container">
            <h3 class="wow fadeInLeft">NUESTRA FILOSOFIA</h3>
          </div>
          <div class="container container-style-1">
            <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
              <article class="quote-tara">
                <div class="quote-tara-caption">
                  <div class="quote-tara-text">
                    <p class="q">Satisfacer las necesidades de las personas interesadas en los videojuegos y articulos de novedad, prestandoles el mejor servicio por parte de todo el personal de la empresa, y manteniendo siempre actualizado nuestro catálogo de juegos y articulos para las diferentes plataformas.</p>
                  </div>
                  <div class="quote-tara-figure"><img src="{{URL::asset('images/Videojuegos (1).jpg')}}" alt="" width="115" height="115"/>
                  </div>
                </div>
                <h6 class="quote-tara-author">Misión</h6>             
              </article>
              <article class="quote-tara">
                <div class="quote-tara-caption">
                  <div class="quote-tara-text">
                    <p class="q">Ser una empresa de reconocido prestigio nacional e internacional, con autonomía administrativa, con excelencia en ventas de videojuegos, más nuevos y actualizados, principalmente con la mejor comodidad y seguridad del mundo para los amantes de los videojuegos.</p>
                  </div>
                  <div class="quote-tara-figure"><img src="{{URL::asset('images/7.jpg')}}" alt="" width="115" height="115"/>
                  </div>
                </div>
                <h6 class="quote-tara-author">Visión</h6>
               
              </article>
              <article class="quote-tara">
                <div class="quote-tara-caption">
                  <div class="quote-tara-text">
                    <p class="q">RESPETO<br>
										LEALTAD<br>
											HONESTIDAD<br>
												RESPONSABILIDAD <br>
											COMPROMISO<br>
												INNOVADOR </p>
                  </div>
                  <div class="quote-tara-figure"><img src="{{URL::asset('images/consola-videojuego.jpg')}}" alt="" width="115" height="115"/>
                  </div>
                </div>
                <h6 class="quote-tara-author">Valores</h6>
                
              </article>           
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
                    <h5 class="services-terri-title"><a href="{{ url('/login') }}">Consolas</a></h5>
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
                    <h5 class="services-terri-title"><a href="{{ url('/login') }}">Videojuegos</a></h5>
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
                    <h5 class="services-terri-title"><a href="{{ url('/login') }}">Muñecos Funko</a></h5>
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
                    <h5 class="services-terri-title"><a href="{{ url('/login') }}">Playeras</a></h5>
                  </div>
                </article>
              </div>
            </div>
         
            
          </div>
        </div>
      </section>

      <section class="primary-overlay section parallax-container" data-parallax-img="{{URL::asset('images/3.jpg')}}">
        <div class="parallax-content section-xl context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-8 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title wow fadeInRight">NUEVA
                    LLEGADA
                    DE MUÑECOS FUNKO</h3>
                  
                  <p class="cta-modern-text oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor wow slideInLeft"></span></p><a class="button button-md button-secondary-2 button-winona wow fadeInUp" href="{{ url('/login') }}" data-wow-delay=".2s">Ver Productos</a>
                </div>
              </div>
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