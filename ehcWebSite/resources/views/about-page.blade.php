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
 
      
<style>
.team-thumb {
  width: 100%;
  height: 300px;
  overflow: hidden; /* Hide any overflow */
}

.team-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensure the image covers the area properly */
}



.image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensure the image covers the area properly */
}

</style>



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

          <!-- about area start  -->
          <section class="about-area section-spacing">
            <div class="container container-large">
              <div class="about-area-inner">
                <div class="section-heading">
                  <div class="section-title-wrapper">
                    <div class="subtitle-wrapper has_fade_anim" data-fade-from="left">
                      <span class="section-subtitle">{{$TitreHeader}}</span>
                    </div>
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">{{$SousTitreHeader}}
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="about-content">
                  <div class="thumb-first has_fade_anim" >
                    <img src="{{ '/storage/'.$Image1Header }}" alt="about image">
                  </div>
                  <div class="text-box-wrapper has_fade_anim" data-delay=".6">
                    <div class="text-box">
                      <div class="text-wrapper">
                      <!-- <p class="text" >
                        Experts Human Capital est un groupe de conseil en ingénierie et services,
                         dédié à accompagner 
                        les organisations dans leur stratégie de développement. 
                        Grâce à l'expertise et au sens éthique de nos consultants, nous nous 
                        positionnons comme un partenaire privilégié dans divers domaines du 
                        management des organisations. Nos valeurs d'engagement, d'innovation, 
                        d'agilité, d'expertise et d'excellence nous permettent de fournir des 
                        solutions sur mesure, favorisant la croissance et l'innovation de nos clients.
                        En choisissant EHC, vous bénéficiez d'un accompagnement personnalisé et d'une 
                        expertise éprouvée pour propulser votre organisation vers de nouveaux sommets. 
                        Ensemble, nous transformons vos défis en opportunités de succès.</p>-->
                        <p class="text" >{!!$ContentHeader!!}</p>
                    
                      </div>
                   <!--   <div class="separator"></div>
                      <div class="scroll-btn btn-move">
                        <a href="#" class="circle-text btn-item">
                          <img src="assets/imgs/shape/scroll-down-text-2.webp" alt="image" class="show-dark text">
                          <img src="assets/imgs/shape/scroll-down-text-2.webp" alt="image" class="show-light text">
                          <img src="assets/imgs/shape/text-since.webp" alt="image" class="show-dark icon">
                          <img src="assets/imgs/shape/text-since.webp" alt="image" class="show-light icon">
                        </a>
                      </div>
                    </div> -->
                    <div class="thumb-second has_fade_anim">
                      <img src="{{  '/storage/'.$Image2Header }}" alt="about image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- about area end  -->

          <!-- partner start  -->
          <div class="partner-area" id="partnerarea">
            <div class="partner-wrapper">
              <div class="partner-thumb">
                <img src="{{  '/storage/'.$Image }}" class="partner-logo" alt="partner-image">
                <div class="container">
                  <div class="partner-award-text">
                    <img src="{{$Logo}}" class="has_fade_anim" alt="awards-logo">
                <!--   <p class="text has_fade_anim">Depuis sa création, EHC est reconnue pour offrir des solutions 
                      innovantes et éthiques en ingénierie et services, favorisant un développement organisationnel durable.</p> -->
             <p class="text has_fade_anim">{!! $descriptionAbout !!}</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partner end  -->

          <!-- work area start  -->
          <section class="work-area">
            <div class="container">
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper has_fade_anim">
                    <span class="section-subtitle">{{$TitreHistoire}}</span>
                  </div>
                  <div class="title-wrapper has_fade_anim" data-delay=".35">
                    <h1 class="section-title">{{$SousTitreHistoire}}</h1>
                  </div>
                </div>
              </div>
              <div class="working-step-wrapper">
@foreach($etapes as $etape)
<div class="working-step has_fade_anim" data-fade-from="left">
                  <span class="count">{{$etape->Date}}</span>
                  <h2 class="title">{{$etape->Titre}}</h2>
                  <p class="text">{!! $etape->Content !!}</p>
                </div>
@endforeach

               <!-- <div class="working-step has_fade_anim" data-fade-from="left">
                  <span class="count">Jan-2010</span>
                  <h2 class="title">Fondation de l'équipe</h2>
                  <p class="text">EHC débute avec des solutions de conseil innovantes et éthiques.</p>
                </div>
                <div class="working-step has_fade_anim" data-delay=".35" data-fade-from="left">
                  <span class="count">July-2016</span>
                  <h2 class="title">Lancement de l'entreprise</h2>
                  <p class="text">EHC se positionne comme leader en conseil en ingénierie et services.</p>
                </div>
                <div class="working-step has_fade_anim" data-delay=".5" data-fade-from="left">
                  <span class="count">Sep-2020</span>
                  <h2 class="title">Ouverture de 10 ...</h2>
                  <p class="text">EHC étend son influence avec dix nouvelles succursales.</p>
                </div>
                <div class="working-step has_fade_anim" data-delay=".65" data-fade-from="left">
                  <span class="count">Aug-2024</span>
                  <h2 class="title">Leader reconnu</h2>
                  <p class="text">EHC devient une entreprise leader avec des solutions sur mesure et une grande expertise.</p>
                </div> -->
              </div>
            </div>
          </section>
          <!-- /work area end  -->

          <!-- team area start  -->
          <section class="team-area style-2">
            <div class="container">
              <div class="feature-section-top">
                <div class="section-title-wrapper style-5 has_fade_anim">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle">{{$TitreTeam}}</span>
                  </div>
                  <h2 class="section-title">{{$SousTitreTeam}}</h2>
                </div>
                <div class="title-top-text has_fade_anim">
                  <p class="text">{!!$ContentTeam!!}</p>
                </div>
                <div class="btn-wrapper has_fade_anim" data-fade-from="right">
                  <a href="{{route('contact')}}" class="wc-btn-underline btn-text-flip"><span
                      data-text="{{$ButtonTeam}}">{{$ButtonTeam}}</span></a>
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
                    <h2 class="section-subtitle">{{$TemoignageTitre}}</h2>
                  </div>
                  <div class="title-wrapper has_fade_anim">
                    <h1 class="section-title">{{$TemoignageSousTitre}}</h1>
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
                  <span class="section-subtitle has_fade_anim" data-fade-from="left">{{$TitrePartenaire}}</span>
                  <div class="section-title-wrapper style-2">
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">{{$SousTitrePartenaire}}</h2>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="text-wrapper has_fade_anim">
                    <p class="text">{{$TextePartenaire}}
                    </p>
                  </div>
                 
                  <div class="client-logos has_fade_anim">
                  @foreach($partenaires->slice(0, 4) as $partenaire)
                   <img src="{{$partenaire->Image}}" alt="client logo">
                 @endforeach
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