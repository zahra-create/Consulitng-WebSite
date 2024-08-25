@props(['page'])

  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>EHC About</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.webp">





  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/icomon.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-about-1.css">
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
          
        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
          <!-- about area start  -->

          <!-- about area end  -->

          <!-- partner start  -->
 
          <!-- partner end  -->

          <!-- work area start  -->

          <!-- /work area end  -->

          <!-- team area start  -->
          <section class="team-area style-2">
            <div class="container">
              <div class="feature-section-top">
                <div class="section-title-wrapper style-5 has_fade_anim">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle">notre équipe</span>
                  </div>
                  <h2 class="section-title">Rencontrer l'équipe de conseillers</h2>
                </div>
                <div class="title-top-text has_fade_anim">
                  <p class="text">L'équipe d'EHC, dynamique et innovante, combine expertise technique et collaboration. Passionnée 
                    par la technologie, elle crée des solutions efficaces et robustes.</p>
                </div>
                <div class="btn-wrapper has_fade_anim" data-fade-from="right">
                  <a href="{{route('contact')}}" class="wc-btn-underline btn-text-flip"><span
                      data-text="Join Our Team">Rejoindre notre équipe</span></a>
                </div>
              </div>
              <div class="team-wrapper style-2">
                @foreach($Equipes as $equipe)
                <div class="has_fade_anim" data-fade-from="left">
                  <a href="{{ route('team-details', ['id' => $equipe->id]) }}">
                    <div class="team style-2">
                      <div class="team-thumb">
                        <img src="{{ $equipe->getImage() }}" alt="team-image">
                      </div>
                      <div class="team-content">
                        <h2 class="name">{{ $equipe->prenom }} {{ $equipe->nom }}</h2>
                        <p class="post">{{ $equipe->poste }}</p>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </section>
          <!-- /team area end  -->

          <!-- testimonial start  -->
          <section class="testimonial-section style-1 section-spacing">
            <div class="container">
              <div class="section-heading">
                <div class="section-title-wrapper style-1">
                  <div class="subtitle-wrapper has_fade_anim">
                    <h2 class="section-subtitle">TÉMOIGNAGES</h2>
                  </div>
                  <div class="title-wrapper has_fade_anim">
                    <h1 class="section-title">Commentaires des clients</h1>
                  </div>
                </div>
              </div>
              <div class="testimonial-inner style-1 has_fade_anim" data-delay=".35">
                <div class="swiper testimonial testimonial style-1">
                  <div class="swiper-wrapper">
                 

                  @foreach($Comments as $comment)
                    <div class="swiper-slide">
                      <div class="testimonial-item style-1">
                        <div class="image-wrapper">
                          <img src="{{$comment->getImage()}}" alt="Testimonial Image" class="image">
                        </div>
                        <div class="content">
                          <div class="text-wrapper">
                            <div class="quote-icon-wrap">
                              <img src="assets/imgs/icon/quote.webp" alt="Quote Icon" class="quote-icon">
                            </div>
                            <p class="text">{!! $comment->commentaire !!}</p>
                          </div>
                          <div class="meta">
                            <p class="name">{{$comment->prenom}} {{$comment->nom}}</p>
                            <p class="post">{{$comment->poste}} , {{$comment->entreprise}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                   @endforeach
 
                 </div>
                </div>
                <div class="swiper-button-next style-1"></div>
                <div class="swiper-button-prev style-1"></div>
              </div>
            </div>
          </section>
          <!-- /testimonial end -->

          <!-- client area start  -->
          <section class="client-area section-spacing">
            <div class="container container-large">
              <div class="client-area-inner">
                <div class="section-heading">
                  <span class="section-subtitle has_fade_anim" data-fade-from="left">partenaires</span>
                  <div class="section-title-wrapper style-2">
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">Nous sommes heureux d'avoir des partenaires réputés.</h2>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="text-wrapper has_fade_anim">
                    <p class="text">Nous croyons que l'humain est essentiel pour démarrer tout projet réussi et que c'est là qu'une splendide 
                      émotion entre l'entreprise régénérée et l'homme se crée.
                    </p>
                  </div>
                  <div class="client-logos has_fade_anim">
                    <img src="assets/imgs/brand/img-s-2.webp" alt="client logo">
                    <img src="assets/imgs/brand/img-s-3.webp" alt="client logo">
                    <img src="assets/imgs/brand/img-s-4.webp" alt="client logo">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- client area end  -->
       
        </main>

        @include('partials.footer')

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

  <script>
    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-1",
          prevEl: ".swiper-button-prev.style-1",
        }
      });
    }
  </script>

</body>

</html>