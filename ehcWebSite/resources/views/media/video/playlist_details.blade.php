<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Playlist details</title>

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
  <link rel="stylesheet" href="assets/css/master-service-style-1.css">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="assets/css/playlist_section.css">



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
  <!--  <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button> 
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button> 
    </div> -->
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


          <!-- first section start -->
          <section class="service-area style-1">
            <div class="container container-large">
              <div class="section-top">
                <div>
                  <div class="subtitle-wrapper has_fade_anim">
                    <span style="color:#004E50;"  class="section-subtitle">Détails</span>
                  </div>
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim">
                      <h2 style="color:#004E50;" class="section-title">Human Resources Management</h2>
                    </div>
                  </div>                              
                </div>
                <div class="btn-wrapper has_fade_anim">
                  <p style="color:#4A7172;" class="text">We believe that the human essential to start any successful project and that this is
                  where splendid emotion between the re-generated company.</p>
           <!--       <a href="team-style-1.html" class="wc-btn-underline btn-text-flip"> <span
                      data-text="Get the expert">Get the
                      expert</span> <i class="fa-solid fa-caret-right"></i></a> -->
                </div>
              </div>
            </div>
          </section>
          <!-- first section end -->



           <!-- playlist section start -->
    <main class="containerv">
        <section class="main-video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=kjiXqIpPTLRGqW6R&amp;list=PLzjYQfVGYahv1hZtA_HMRhebuJXXSdEgh&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <div class="titlev"><h3>INTRODUCTION</h3> </div> 
        </section>
        <section class="video-playlist">
      <!--      <h3 class="titlev"> title of video playlist</h3> -->
            <p>10 lesssons &nbsp; . &nbsp; 50m 48s</p>
            <div class="videos">
          
              
        </div>
        </section>
    </main>
           <!-- playlist section end -->

          

         
         
          
        <section  class="client-area section-spacing">
            <div  class="container container-large">
              <div class="client-area-inner">
                <div class="section-heading">
                  <span style="color:#004E50;"  class="justify section-subtitle has_fade_anim" data-fade-from="left">contributeurs</span>
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim">
                      <h2 style="color:#004E50;" class="section-title">Playlist par experts
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="text-wrapper has_fade_anim">
                    <p style="color:#4A7172;" class="text">We believe that the human essential to start any successful project and that this is
                      where splendid emotion between the re-generated company.
                    </p>
                  </div> 
                  <div class="client-logos has_fade_anim">
                    <img  src="assets/imgs/gallery/expert1.jpg" alt="client logo">
                    <img src="assets/imgs/gallery/expert2.jpg" alt="client logo">
                    <img src="assets/imgs/gallery/expert3.png" alt="client logo"> 
                    <img src="assets/imgs/gallery/expert4.jpg" alt="client logo"> 
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
  <script src="assets/js/script.js"></script>

</body>

</html>