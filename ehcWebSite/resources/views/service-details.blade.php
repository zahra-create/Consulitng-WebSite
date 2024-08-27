<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title> détails service</title>

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
  <link rel="stylesheet" href="{{ url('assets/css/master-service-details.css') }}">
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


          <!-- service details area start  -->
          <section class="service-details-area section-spacing pt-0">
            <div class="service-details-intro-area">
              <div class="details-intro-area-top">
                <div class="container container-large">
                  <div class="details-intro-inner">
                    <div class="social-links-position">
                      <div class="social-links-wrapper">
                        <div class="social-links">
                          <!--<p class="text has-right-line">Follow Us</p>-->
                          <ul class="social-icons">
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <img src="{{ url('assets/imgs/gallery/xxx') }}" alt="" class="shape-1">
                    <div class="details-intro-content">
                      <div class="title-box">
                        <div class="section-title-wrapper">
                          <div class="subtitle-wrapper has_fade_anim" data-fade-from="left">
                            <span class="details-text section-subtitle">{{$serv->TitreService}}</span>
                          </div>
                          <div class="title-wrapper has_fade_anim">
                            <h1 class="section-title details-title large">{{$serv->TitreService}}</h1>
                          </div>
                        </div>
                      </div>
                      <div class="text-box">
                        <div class="text-wrapper">
                          <div class="cf_text has_fade_anim">
                            <p class="justify details-text text">{!! $serv->DescriptionService !!}</p>
                          </div>
                        </div>
                      <!--   <div class="btn-wrapper has_fade_anim">
                        <a class="details-text cf_btn wc-btn-underline btn-text-flip" href="#"><span  data-text="See the plan">See
                              the plan ghan7ydo ..</span><i class="fa-solid fa-caret-right"></i></a>  
                        </div>  -->
                  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container container-large">
                <div class="details-intro-thumb-wrapper">
                  <div class="details-intro-thumb">
                    <img src="{{ asset('storage/' .$serv->ImageHeader)}}" alt="service image">
                  </div>
                </div>
              </div>
            </div>
            <!-- details intro area end  -->

            <!-- details content area start   -->
            <div class="details-content-area section-spacing">
              <div class="container container-large">
                <div class="details-content-area-inner">
                  <div class="details-content has_fade_anim">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper">
                        <h2 class=" details-title section-title">{{$serv->Titre1}}</h2>
                      </div>
                    </div>
                    <div class="text-wrapper">
                      <p class="justify details-text text">{!! $serv->Content1 !!}</p>
                    </div>
                    <div class="details-feature-content">
                      <h3 class="details-title title">{{$serv->Titre2}}</h3>
                      <div class="feature-list-wrapper">
                   <!--     <ul class="feature-list">
                         <li><span class="icon"><i class="fa-solid fa-arrow-right"></i></span> -->
                            <p class="justify details-text text">{!! $serv->Content2 !!}</p>
                        <!--   </li>
                          <li><span class="icon"><i class="fa-solid fa-arrow-right"></i></span> 
                            <p class="justify details-text text">Gestion optimisée des ressources humaines, avec des solutions adaptées pour le recrutement, la gestion des talents, et le développement des compétences.</p>
                        </li>
                          <li><span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <p class="justify details-text text">Analyse et amélioration des processus opérationnels pour augmenter l'efficacité et la performance globale de votre entreprise.</p>
                          </li>
                        </ul> -->
                      </div>
                    </div>
                    <div class="details-feature-content">
                      <h3 class="details-title title">{{$serv->Titre3}}</h3>
                      <div class="feature-list-wrapper">
                        <p>{!! $serv->Content3 !!}</p>
                    <!--    <ul class="service-feature-list list-plus">
                          <li class="justify details-text">Stratégies de transformation numérique</li>
                          <li class="justify details-text">Techniques de gestion des ressources humaines</li>
                          <li class="justify details-text">Méthodes d'amélioration de la performance</li>
                        </ul> -->
                      </div>
                    </div>
                <!--    <div class=" btn-wrapper">
                      <a href="contact.html" class="wc-btn-primary btn-text-flip"> <span data-text="Contact us">Contact
                          us</span> <i class="fa-solid fa-caret-right"></i></a>
                    </div> -->
                    <div class="btn-wrapper has_fade_anim" data-delay=".5">
                        <a href="about-1.html" style="background-color:#005153; border:none;" class="cf_btn wc-btn-primary btn-text-flip"><span
                            data-text="{{$serv->Button}}">{{$serv->Button}} </span> <img src="{{ url('assets/imgs/icon/icon-r-21.webp') }}" alt="arrow-icon"></a>
                      </div>
                  </div>
                  <div class="thumb has_fade_anim" data-fade-from="right">
                    <img src="{{ asset('storage/' .$serv->Image) }}" alt="service image">
                  </div>
                </div>
              </div>
            </div>
            <!-- details content area end   -->

            <div class="container container-large">
              <div class="text-wrapper has_fade_anim">
            <!--   <p class="text">Myriam was first trained as a sculptor in Montreal and then in Helsinki, Finland. She is
                  now based in Quebec but works for clients all around the globe. From textile design to murals,
                  editorial
                  illustrations and book covers, her style is recognized by her simple and perfectly arranged shapes as
                  well as her rich and vibrant color palette. Striking pewter studded epaulettes silver zips inner
                  drawstring waist channel urban edge breasted jacket. detail elegant with neutral color scheme quartz
                  leather strap fasten buckle clasp.</p>
                <p class="text">However, the same reason also makes it messy. If someone is having a bad day, we might
                  see
                  it as a sign
                  of tension or lack of investment in the project. for outsider lacking an understanding of the complex
                  dynamics of a team can lead to the wrong conclusions.</p> -->
              </div>
              <!--<div class="working-step-wrapper fix section-spacing pt-0">
                <div class="working-steps">
                  <div class="working-step has_fade_anim" data-fade-from="left">
                    <span class="count">Step-01</span>
                    <h2 class="title">Find business
                      needs</h2>
                    <p class="text">Trade stocks of the biggest names in the international stock market</p>
                  </div>
                  <div class="working-step has_fade_anim" data-delay=".35" data-fade-from="left">
                    <span class="count">Step-02</span>
                    <h2 class="title">Solutions tailored
                      to your needs</h2>
                    <p class="text">Trade stocks of the biggest names in the international stock market</p>
                  </div>
                  <div class="working-step has_fade_anim" data-delay=".5" data-fade-from="left">
                    <span class="count">Step-03</span>
                    <h2 class="title">Align tactic with
                      objective</h2>
                    <p class="text">Trade stocks of the biggest names in the international stock market</p>
                  </div>
                  <div class="working-step has_fade_anim" data-delay=".65" data-fade-from="left">
                    <span class="count">Step-04</span>
                    <h2 class="title">Results deliver
                      measurable
                    </h2>
                    <p class="text">Trade stocks of the biggest names in the international stock market</p>
                  </div>
                </div>
              </div>-->
              <!-- experience area start  -->
              <div class="experience-area">
                <div class="experience-area-bg">
                  <img src=" {{asset('storage/' . $serv->LastImage)}}" alt="gallery">
                </div>
                <div class="container">
                  <div class="section-content">
                    <div class="counter-box-wrapper">
                      <span class="shadow shadow-1"></span>
                      <span class="shadow shadow-2"></span>
                      <span class="shadow shadow-3"></span>
                      <div class="counter-box">
                        <h2 class="number has_fade_anim">{{$serv->LastTitre}}</h2>
                        <h3 class="text has_fade_anim">{{$serv->LastSousTitre}}
                      </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- experience area end  -->
            </div>



          </section>
          <!-- service details area end  -->

          <!-- cta area start  -->
          @include('partials.disponibility')
          <!-- cta area end  -->

        </main>

        <!-- footer area start  -->
        @include('partials.footer')
        <!-- footer area end  -->

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