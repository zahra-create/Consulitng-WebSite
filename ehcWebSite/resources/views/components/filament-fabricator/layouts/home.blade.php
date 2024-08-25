@props(['page'])

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">


  <title>EHC</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ url('assets/imgs/logo/favicon.webp') }}">


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
  <link rel="stylesheet" href="{{ url('assets/css/master-service-style-1.css') }}">
   
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
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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
      <div class="body-wrapper consultant-human">

        <main>

          <!-- start intro area -->

          <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
          

          <!-- end intro area -->

          <!-- about area start  -->
          <section id="triggeredSection" class="about-area section-spacing" >
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="area-shape-1" src="{{ url('assets/imgs/shape/x-shape-5.webp') }}" alt="shape">
            <div class="container">
              <div class="about-area-inner">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim" >
                      <h2 class="section-title" style="color:rgb(0, 81, 81);" >
                      Ayant en moyenne plus de 20 ans
                        d'experience dans leurs domaines de competence</h2>
                    </div>
                  </div>
                  <div class="thumb-wrapper has_fade_anim" data-fade-from="left">
                    <div class="react-shape"  style="background-color:rgb(0, 81, 81);">
                      <span class="text" > </span>
                    </div>
                    <div class="react-thumb">
                      <img src="{{ url('assets/imgs/gallery/img-r-14.png') }}" alt="about-image">
                    </div>
                  </div>
                  <div class="text-wrapper has_fade_anim">
					  <p class="text">Chez EHC, nous sommes dedies à transformer la gestion des ressources humaines en un atout strategique pour votre entreprise.</p>
             <p class="text">Avec une equipe d'experts en RH, nous offrons des solutions sur mesure pour optimiser vos processus et attirer les meilleurs talents.</p>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="{{ route('about')}}" class="wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);" > <span data-text="Qui sommes-nous">Qui sommes-nous
                     </span> <img src="{{ url('assets/imgs/icon/icon-r-21.webp') }}" alt="arrow-icon"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="area-thumb">
              <img src="{{ url('assets/imgs/gallery/img-s-21.png') }}" alt="hero image">
            </div>
          </section>
          <!-- about area end  -->
		  
		  <!-- Valeurs et engagements start  -->
       
          <section class="service-area style-6 section-spacing line-area" style="padding-top:90px;" >       <!--style="padding-top:90px;">-->
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div> 
                </div> 
              </div>
            </div>
            <div class="container" >
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="font-size: 60px; color:rgb(0, 81, 81); "><span>POURQUOI EHC ?</span></h2>
                  </div>
            	<div class="subtitle-wrapper has_fade_anim" data-delay=".35" >
				  <p style="font-size: 25px; ">Au coeur de ses valeurs, EHC place la satisfaction de ses partenaires au sommet de ses priorites</p>
                  </div>
                </div>
              </div>
              
              <div class="feature-wrapper" >
                <div class="wcf_iconbox style-8 has_fade_anim">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-33.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">ENGAGEMENT</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".35">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-34.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">AGILITE</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".5">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-35.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">EXPERTISE</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".65">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-36.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">INNOVATION & EXCELLENCE</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
   
          

<!-- Valeurs et engagements end  -->

<!--End espace pub after footer-->


        </main>
 

        
        @include('partials.footer')


  <!-- All JS files -->
  <script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('assets/js/counter.js') }}"></script>
  <script src="{{ url('assets/js/progressbar.js') }}"></script>
  <script src="{{ url('assets/js/gsap.min.js') }}"></script>
  <script src="{{ url('assets/js/ScrollSmoother.min.js') }}"></script>
  <script src="{{ url('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ url('assets/js/backToTop.js') }}"></script>
  <script src="{{ url('assets/js/man.js') }}"></script>
  <script src="{{ url('assets/js/error-handling.js') }}"></script>
  <script src="{{ url('assets/js/wc-cursor.js') }}"></script>
  <script src="{{ url('assets/js/offcanvas.js') }}"></script>

  

  <script>



 // intro slider 
 if (('.baner-active-1').length) {
      var baner_active = new Swiper(".baner-active-1", {
        pagination: {
          el: ".spagination-style-1",
          type: "fraction",
        },
        loop: true,
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

    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-1",
          prevEl: ".swiper-button-prev.style-1",
        }
      });
    }

    // corporate_brand_slider_active
    if ('.corporate-brand-slider-active') {
      var corporate_brand_slider_active = new Swiper(".corporate-brand-slider-active", {
        slidesPerView: 6,
        loop: true,
        autoplay: true,
        spaceBetween: 60,
        speed: 3000,
        autoplay: {
          delay: .1,
          disableOnInteraction: false,
        },
        breakpoints: {
          // when window width is >= 320px
          375: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 4,
            spaceBetween: 40
          },
          // when window width is >= 1366px
          1366: {
            slidesPerView: 6,
          },
        }
      });
    }
    // testimonial_style_1
    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-3",
          prevEl: ".swiper-button-prev.style-3",
        }
      });
    }


  </script>

</body>

</html>
