<!DOCTYPE html>
<html lang="{{ str_replace('_' , '-' , app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>EHC</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.webp">


  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/icomon.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}"> 
  <link rel="stylesheet" href="{{ url('assets/css/progressbar.css') }}">
   <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}"> 
  <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">  
    <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
     <link rel="stylesheet" href="{{ url('assets/css/master-financial.css') }}"> 
    <link rel="stylesheet" href="{{ url('master-blog-2.css') }}"> 
    <link rel="stylesheet" href="{{ url('master-agency.css') }}"> 
 


   
</head>


<body class="font-heading-hkgrotesk-bold">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
        <span data-text="E" class="characters">E</span>
        <span data-text="H" class="characters">H</span>
        <span data-text="C" class="characters">C</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>

  <!-- Scroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-robot"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="switcher__items">

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->

  <!-- offcanvas start  -->
  @include('partials.menu-bar')
  <!-- offcanvas end  -->

  <!-- search modal start -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form action="#" class="form-search">
            <input type="text" placeholder="Search">
			<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>   <!--Recherche-icon-->
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

  @include('partials.header')


  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>


        <main>


         <!-- banner area start  -->
          <section class="banner-area p-relative fix zi-1 banner-1"  >
            <div class="swiper baner-active-1" style=" height:60vh; ">
              <div class="swiper-wrapper">
                <div class="swiper-slide" >
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                      <img src="assets/imgs/gallery/Infinity_Recrutement.jpg" alt="offering consultancy">
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                          <span class="subtitle has_fade_anim " data-fade-from="right">RH</span>
                          <div class="title-wrapper has_fade_anim" 
                            data-delay="0.35">
                            <h2 class="title" style=" font-weight:900;">Les Tendances Actuelles en Recrutement pour 2024</h2>
                          </div>
                          <div class="text">
                            <div class="cf_text has_fade_anim" data-delay=".5" data-fade-from="right">
                              <p class="has-top-line">Juillet 27, 2024</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                      <img src="assets/imgs/gallery/Actu.webp" alt="offering consultancy">
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                          <span class="subtitle" style="color:white; ">RH</span>
                          <div class="title-wrapper">
                            <h2 class="title" style="color:white; font-weight:900;">L'Impact de la Digitalisation sur la Gestion des Ressources Humaines</h2>
                          </div>
                          <div class="text">
                            <div class="cf_text">
                              <p class="has-top-line" style="color:white; ">31 Juillet 2024</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                      <img src="assets/imgs/gallery/Equilibre-viepro_vieperso.jpg" alt="offering consultancy">
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                          <span class="subtitle">Coaching</span>
                          <div class="title-wrapper">
                            <h2 class="title" style=" font-weight:900;">L'equilibre Vie Professionnelle-Vie Personnelle</h2>
                          </div>
                          <div class="text">
                            <div class="cf_text">
                              <p class="has-top-line">03 Aout 2024</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pagination-wrapper">
                <div class="container container-large" >
                  <div class="pagination-style-1"></div>
                </div>
              </div>
            </div>
            <!-- <div class="banner-area-vision has_fade_anim" data-delay=".65" data-ease="bounce">
             <div class="btn-wrapper btn-move d-inline-block">
                <a class="cf_btn wc-btn-play light video-popup btn-item" href="assets/video/team-planning.mp4">
                  <i class="icon-wcf-play-2"></i>
                </a>
              </div> -->
            <!--  <div class="text-wrapper">
                <div class="cf_text">
                  <p class="text">We are dedicated to guiding you on your financial journey with expertise and the
                    personal approach.</p>
                </div> 
              </div>
              <img src="assets/imgs/shape/shape-x.webp" alt="" class="shape-x">
            </div> -->
          </section>
          <!-- banner area end  -->


          <!-- blog area start  -->
           {{ $slot }}
          <!-- blog area end  -->


 



          <!-- cta area start  -->

          <!-- cta area end  -->

        </main>

        @include('partials.footer')

  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/progressbar.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/backToTop.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/error-handling.js"></script>
  <script src="assets/js/wc-cursor.js"></script>
  <script src="assets/js/offcanvas.js"></script>

  <script>

    // intro slider 
    if (('.baner-active-1').length) {
      var baner_active = new Swiper(".baner-active-1", {
        speed: 1000,
        pagination: {
          el: ".spagination-style-1",
          type: "fraction",
        },
        loop: true,
        autoplay: true,
        slidesPerView: 1,
        spaceBetween: 0,
        mousewheel: false,
        pagination: {
          el: '.pagination-style-1',
          type: 'fraction',
          clickable: true,

          renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' + ' <span class="dash"></span> ' + '<span class="' + totalClass + '"></span>';
          }
        },
      });
    }
    // testimonial
    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        speed: 1500,
        navigation: {
          nextEl: ".swiper-button-next.style-1",
          prevEl: ".swiper-button-prev.style-1",
        }
      });
    }


  </script>

</body>

</html>