<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Equipe EHC</title>

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
  <link rel="stylesheet" href="{{ url('assets/css/master-team-details.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">





</head>


<body class="font-heading-hkgrotesk-bold">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="B" class="characters">E</span>
          <span data-text="I" class="characters">H</span>
          <span data-text="N" class="characters">C</span>
    
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
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
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

          <!-- team details start  -->
          <section class="team-details">
            <div class="container">
              <div class="team-details-wrapper">
                <div class="team-content">
                  <h2 class="title has_fade_anim">{{ $equipe->prenom }} <br> {{ $equipe->nom }}</h2>
                 <ul class="social-icons has_fade_anim" data-delay=".35">
                    <!-- <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>-->
       <!--@foreach($equipe->reseaux_sociaux as $reseau)
        <li>
            <a href="{{ $reseau['lien'] }}">
                <i class="fa-brands fa-{{ $reseau['nom'] }}"></i>
            </a>
        </li>
        @endforeach --> 
        @foreach($equipe->reseaux_sociaux as $reseau)
    @switch($reseau['nom'])
        @case('Telephone')
            <li>
                <a href="tel:{{ $reseau['lien'] }}">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </li>
            @break

        @case('Email')
            <li>
                <a href="mailto:{{ $reseau['lien'] }}">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </li>
            @break

        @case('Whatsapp')
            <li>
                <a href="https://wa.me/{{ $reseau['lien'] }}">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </li>
            @break

        @default
            <li>
                <a href="{{ $reseau['lien'] }}">
                    <i class="fa-brands fa-{{ strtolower(preg_replace('/[^a-z0-9]/', '-', $reseau['nom'])) }}"></i>
                </a>
            </li>
    @endswitch
@endforeach

        </ul>
  
                  <p class="text has_fade_anim">{!! $equipe->description !!}</p>
                  <div class="btn-wrapper has_fade_anim" data-on-scroll="0">
                    <a href="{{ route('contact') }}" class="wc-btn-primary btn-text-flip"> <span data-text="Contact Now">Contact
                        Now</span> <i class="fa-solid fa-caret-right"></i></a>
                  </div>
                </div>
                <div class="team-thumb has_fade_anim" data-fade-from="right">
                  <img src="{{ $equipe->getImage() }}" alt="image">
                </div>
              </div>
            </div>
          </section>
          <!-- /team details end  -->


          <!-- testimonial area start  -->
          <div class="testimonial-section section-spacing has_fade_anim">
            <div class="container">
              <div class="testimonial-inner style-2">
                <div class="swiper testimonial testimonial style-2">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="testimonial-item style-2">
                        <div class="content">
                          <div class="text-wrapper">
                            <div class="quote-icon-wrap">
                              <img src="{{ url('assets/imgs/icon/quote.webp') }}" alt="Quote Icon" class="quote-icon">
                            </div>
                            <p class="text">{!! $equipe->quote !!}</p>
                          </div>
                          <div class="meta">
                            <p class="name">{{$equipe->prenom}} {{$equipe->nom}}</p>
                            <p class="post">{{$equipe->poste}}, {{$equipe->entreprise}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
             <!--   <div class="swiper-button-next style-2"><span class="case-upper">Next</span></div>
                <div class="swiper-button-prev style-2"><span class="prev-text case-upper">Prev</span></div>-->
              </div>
            </div>
          </div>
          <!-- testimonial area end  -->

      

        </main>

        <!-- footer start  -->
        @include('partials.footer')
        <!-- footer end  -->

      </div>
    </div>
  </div>



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
  <script src="{{ url('assets/js/main.js') }}"></script>
  <script src="{{ url('assets/js/error-handling.js') }}"></script>
  <script src="{{ url('assets/js/wc-cursor.js') }}"></script>
  <script src="{{ url('assets/js/offcanvas.js') }}"></script>

</body>

</html>