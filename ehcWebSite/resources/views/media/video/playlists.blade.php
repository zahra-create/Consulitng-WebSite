<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>EHC videos</title>

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
  <link rel="stylesheet" href="assets/css/master-projects.css">

  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">




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

          <!-- projects area start  -->
          <section style="padding-top:7rem;" class="projects-area section-spacing">
            <div class="container container-large">
              <div class="projects-area-inner">
                <div class="section-heading">
                  <div class="section-title-wrapper">
                    <div class="subtitle-wrapper has_fade_anim" data-fade-from="left">
                      <span style="color:#004E50;" class="section-subtitle">EHC playlists</span>
                    </div>
                    <div class="title-wrapper has_fade_anim">
                      <h2 style="color:#004E50; " class="section-title large"> PLAYLISTS RECOMMANDÉE</h2>
                    </div>
                    <div class="text-wrapper has_fade_anim">
                      <p style="color:#4A7172;" class="text">Every decision make need answer the million dollar question how will this benefit
                        our partner goal best we work to develop solution:</p>
                    </div>
                  </div>
                </div>
                <div class="projects-list fix">
                  <div class="projects-wrapper">
                    <div class="project-item style-1 has_fade_anim" data-fade-from="left">
                      <div class="project-thumb">
                        <a href="project-details.html"><img src="assets/imgs/gallery/HRM.webp"
                            alt="project-image"></a>
                      </div>
                      <div class="project-content">
                        <h2><a  href="{{ route('playlist_details') }}" class="title wc-btn-normal btn-text-flip"><span  style="color:#004E50;"
                              data-text="HRM">HRM </span><i class="fa-solid fa-arrow-right"></i></a> </h2>
                        <p style="color:#4A7172;" class="text">10 vidéos</p>
                      </div>
                    </div>
                    <div class="project-item style-1 has_fade_anim" data-fade-from="left" data-delay=".35">
                      <div class="project-thumb">
                        <a href="project-details.html"><img src="assets/imgs/gallery/strategy.jpg"
                            alt="project-image"></a>
                      </div>
                      <div class="project-content">
                        <h2><a href="project-details.html" class="title wc-btn-normal btn-text-flip"><span style="color:#004E50;"
                              data-text="Strategy">Strategy</span><i class="fa-solid fa-arrow-right"></i></a> </h2>
                        <p style="color:#4A7172;" class="text">9 vidéos</p>
                      </div>
                    </div>
                    <div class="project-item style-1 has_fade_anim" data-fade-from="left" data-delay=".5">
                      <div class="project-thumb">
                        <a href="project-details.html"><img src="assets/imgs/gallery/leadership.jpg"
                            alt="project-image"></a>
                      </div>
                      <div class="project-content">
                        <h2><a href="project-details.html" class="title wc-btn-normal btn-text-flip"><span style="color:#004E50;"
                              data-text="Leadership">Leadership</span><i class="fa-solid fa-arrow-right"></i></a> </h2>
                        <p style="color:#4A7172;" class="text">23 vidéos</p>
                      </div>
                    </div>
                    <div class="project-item style-1 has_fade_anim" data-fade-from="left">
                      <div class="project-thumb">
                        <a href="project-details.html"><img src="assets/imgs/gallery/employmenet.jpeg"
                            alt="project-image"></a>
                      </div>
                      <div class="project-content">
                        <h2><a href="project-details.html" class="title wc-btn-normal btn-text-flip"><span style="color:#004E50;"
                              data-text="Employment">Employment</span><i class="fa-solid fa-arrow-right"></i></a> </h2>
                        <p style="color:#4A7172;" class="text">2 vidéos</p>
                      </div>
                    </div>
                    <div class="project-item style-1 has_fade_anim" data-fade-from="left" data-delay=".35">
                      <div class="project-thumb">
                        <a href="project-details.html"><img src="assets/imgs/gallery/market strategy.jpg"
                            alt="project-image"></a>
                      </div>
                      <div class="project-content">
                        <h2><a href="project-details.html" class="title wc-btn-normal btn-text-flip"><span style="color:#004E50;"
                              data-text="Market Strategy">Market Strategy</span><i
                              class="fa-solid fa-arrow-right"></i></a> </h2>
                        <p style="color:#4A7172;" class="text">12 vidéos</p>
                      </div>
                    </div>
                    <div class="project-item style-1 has_fade_anim" data-fade-from="left" data-delay=".5">
                      <div class="project-thumb">
                        <a href="project-details.html"><img src="assets/imgs/gallery/market research.jpg"
                            alt="project-image"></a>
                      </div>
                      <div class="project-content">
                        <h2><a href="project-details.html" class="title wc-btn-normal btn-text-flip"><span style="color:#004E50;"
                              data-text="Market Research">Market Research</span><i
                              class="fa-solid fa-arrow-right"></i></a> </h2>
                        <p  style="color:#4A7172;" class="text">15 vidéos</p>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="pagination style-1 has_fade_anim">
                  <li><a href="#">1</a></li>
                  <li><a class="current" href="#">2</a></li>
                  <li><a href="#">Next <img src="assets/imgs/icon/arrow-next-icon.webp" alt="arrow-icon"></a></li>
                </ul>
              </div>
            </div>
          </section>
          <!-- projects area end  -->

          <!-- cta area start  -->
  <!--        <div class="cta-area style-1 mbm-1">
            <div class="container container-large">
              <div class="cta-area-wrapper">
                <div class="cta-left">
                  <ul class="cta-info">
                    <li>
                      <p class="title">Saturday - Thursday :</p>
                      <span>8:30 am - 10:45 pm</span>
                    </li>
                  </ul>
                </div>
                <div class="cta-right">
                  <div class="btn-wrapper">
                    <a class="cf_btn wc-btn-underline btn-text-flip" href="contact.html"><span
                        data-text="Call for an appointment">Call for an appointment</span><img
                        src="assets/imgs/icon/arrow-triangle.webp" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- cta area end  -->
          @include('partials.disponibility')
        </main>

        <!-- footer area start  -->
   @include('partials.footer')

        <!-- footer area end  -->

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