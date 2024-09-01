<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>services fonctionnaires</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ url('assets/imgs/logo/logoEHC.png') }}">





  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/icomon.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-service-style-5.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-financial.css') }}">



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
    <!--  <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button> -->
      <button id="switcher_open"><i class="fa-solid fa-robot"></i></button>
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

  <!-- Header area start -->
  @include('partials.header')
  <!-- Header area end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>



        <main>


          <!-- service start  -->
          <section class="service-area style-5 pin__area">
            <div class="container container-medium">
              <div class="service-wrapper">
                <div class="section-content">
                  <div id="pinElement" class="section-heading pin__element">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title">{{$TitreIntroService}}</h1>
                      </div>
                      <div class="text-wrapper has_fade_anim">
                        <p class="text">{!! $IntroService !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="services-list has_fade_anim">

@php
    $counter = 1;
@endphp 
@foreach($services as $serv)
<div class="services-item">
                    <p class="count">{{ str_pad($counter, 2, '0', STR_PAD_LEFT) }}</p>
                    <a href="{{route('service-details', $serv)}}">
                      <h2 class="title">{{$serv->TitreService}}</h2>
                    </a>
                    <p class="text">{{$serv->DescriptionService}}</p>
                    <a href="{{route('service-details', $serv)}}" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
@php
    $counter++;
@endphp
@endforeach
           
                </div>
              </div>
            </div>
          </section>
          <!-- service end  -->

          <!-- specialization area start  -->
          <section class="specialization-area style-1">
            <div class="specialization-inner">
              <div class="specialization-thumb">
                <img src="{{  asset('storage/' .$Image) }}" alt="faq-image">
              </div>
              <div class="specialization-content section-spacing">
                <div class="section-title-wrapper style-1 has_fade_anim">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle">{{$TitreService}}</span>
                  </div>
                  <div class="title-wrapper">
                    <h1 class="section-title">{{$SousTitreService}}</h1>
                  </div>
                  <div class="cf_text">
                    <p class="text">{!! $description !!}</p>
                  </div>
             <!--     <ul class="list-plus">
                    <li>Recherche d'emploi ciblée sur votre profil</li>
                    <li>Evaluation précise de vos compétences</li>
                    <li>Développement personnel et professionnel</li>
                  </ul> -->
                </div>
              </div>
            </div>
          </section>
          <!-- specialization area end  -->

          <section class="plan-area">
            <div class="container">
              <div class="plan-area-inner ">
                <div class="section-heading">
                  <div class="subtitle-wrapper has_fade_anim">
                    <span class="section-subtitle">{{$Titre}}</span>
                  </div>
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title">{{$SousTitre}}</h2>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="{{route('demande-devis')}}" class="wc-btn-primary btn-text-flip"><span data-text="{{$Button}}">{{$Button}}</span><i class="fa-solid fa-play"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>


        </main>

        <!-- footer start  -->
        @include('partials.footer')
        <!-- footer end  -->

      </div>
    </div>
  </div>



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

</body>

</html>