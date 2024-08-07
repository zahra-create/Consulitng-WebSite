<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="{{ url('assets/css/podcasts.css') }}">


   
</head>


<body class="font-heading-beatricetrial-regular">

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

          <!-- blog area start  -->
          <section class="blog-area section-spacing pin__area">
            <div class="container" style="margin-top:50px;">
              <div class="blog-area-inner">
			   <div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left" style="width:350px;">
          <div class="header">
            <h3 class="title-2" style="margin-bottom:10px; color:#005151;" >Newsletter</h3>
            <p>Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités.</p>
          </div>
          <form action="#" class="subscribe-form" style="margin-top:40px; border-radius:10px; background-color: #00515130; margin-top:5px;">
            <input type="email" placeholder="Entrer votre email">
            <button type="submit" class="subscribe-btn">
              <i class="icon-wcf-paper-plane" style="color:rgb(85, 85, 85); font-size:20px;"></i></button>
          </form>
                </div>
                <div class="blog-main-wrapper">
                  <div class="section-heading">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title large" style="color:#005151;">Écoutez nos experts </h1>
                      </div>
                    </div>
                  </div>
                  <div class="blog-wrapper-area fix has_fade_anim" data-delay=".35">
                    <div class="blog-wrapper">
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="author">
                            <div class="avatar"><img src="assets/imgs/podcasts/innovation.png" alt=""></div>
                            <div class="">
                              <span class="meta-title">Présenté par</span>
                              <span class="name">EHC expert</span>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="meta">
                                <span class="tag">RH</span>
                                <span class="date has-left-line">Juillet 29, 2024</span>
                              </div>
                              <h2 class="title">Tendances et Innovations en RH</h2>
                              <p class="text">Les nouvelles tendances en gestion des talents pour 2024.....</p>
                            </div>
                            <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                          </div>
                        </article>
                      </a>

                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="author">
                            <div class="avatar"><img src="assets/imgs/podcasts/formation.png" alt=""></div>
                            <div class="">
                              <span class="meta-title">Présenté par</span>
                              <span class="name">EHC</span>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="meta">
                                <span class="tag">Coaching</span>
                                <span class="date has-left-line">Juillet 29, 2024</span>
                              </div>
                              <h2 class="title">Développement Professionnel et Formation</h2>
                              <p class="text">L'importance de la formation continue pour le développement des compétences.....</p>
                            </div>
                            <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                          </div>
                        </article>
                      </a>
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="author">
                            <div class="avatar"><img src="assets/imgs/podcasts/recrutement.png" alt=""></div>
                            <div class="">
                              <span class="meta-title">Présenté par</span>
                              <span class="name">EHC</span>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="meta">
                                <span class="tag">RH</span>
                                <span class="date has-left-line">January 29, 2024</span>
                              </div>
                              <h2 class="title">Recrutement et Talent Acquisition</h2>
                              <p class="text">Comment attirer et retenir les meilleurs talents dans un marché concurrentiel.....</p>
                            </div>
                            <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                          </div>
                        </article>
                      </a>
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="author">
                            <div class="avatar"><img src="assets/imgs/podcasts/culture.png" alt=""></div>
                            <div class="">
                              <span class="meta-title">Présenté par</span>
                              <span class="name">EHC</span>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="meta">
                                <span class="tag">Coaching</span>
                                <span class="date has-left-line">January 29, 2020</span>
                              </div>
                              <h2 class="title">Culture d'Entreprise et Engagement des Employés</h2>
                              <p class="text">Construire une culture d'entreprise positive et engageante.....</p>
                            </div>
                            <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                          </div>
                        </article>
                      </a>
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="author">
                            <div class="avatar"><img src="assets/imgs/podcasts/performance.png" alt=""></div>
                            <div class="">
                              <span class="meta-title">Présenté par</span>
                              <span class="name">EHC</span>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="meta">
                                <span class="tag">Coaching</span>
                                <span class="date has-left-line">January 29, 2020</span>
                              </div>
                              <h2 class="title">Gestion des Performances et Évaluations</h2>
                              <p class="text">Meilleures pratiques pour évaluer et améliorer les performances des employés.....</p>
                            </div>
                            <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                          </div>
                        </article>
                      </a>
                    </div>
                  </div>
                  <ul class="pagination style-1 has_fade_anim">
                  <li><a href="{{ route('Podcasts') }}">1</a></li>
                  <li><a class="current" href="{{ route('Page2') }}">2</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->

          <!-- cta area start  -->
          @include('partials.disponibility')
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



</body>

</html>