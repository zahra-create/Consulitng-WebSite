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
  <div class="offcanvas-3__area">
    <div class="offcanvas-3__inner">
      <div class="offcanvas-3__meta-wrapper">
        <div class="">
          <button id="close_offcanvas" class="close-button close-offcanvas" onclick="hideCanvas3()">
            <span></span>
            <span></span>
          </button>
        </div>
        <div class="">
          <div class="offcanvas-3__meta mb-145 d-none d-md-block">
            <ul>
              <li><a href="tel:+2-352698102" class="unnerline"><u>+2-352 698 102</u></a></li>
              <li><a href="mailto:contact@me.com">contact@me.com</a></li>
              <li><a href="">27 Division St, <br>
                  New York, NY 10002, USA</a></li>
            </ul>
          </div>
          <div class="offcanvas-3__social d-none d-md-block">
            <p class="title">Follow Me</p>
            <div class="offcanvas-3__social-links">
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-dribbble"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="offcanvas-3__menu-wrapper">
        <nav class="nav-menu offcanvas-3__menu">
          <ul>
            
            <li><a href="consultant-agency.html">consultant-agency</a></li>
            <li><a href="consultant-bank.html">consultant-bank</a></li>
            <li><a href="consultant-business.html">consultant-business</a></li>
            <li><a href="consultant-corporate.html">consultant-corporate</a></li>
            <li><a href="consultant-financial.html">consultant-financial</a></li>
            <li><a href="consultant-human.html">consultant-human</a></li>
            <li><a href="consultant-insurance.html">consultant-insurance</a></li>
            <li><a href="consultant-it.html">consultant-it</a></li>
            <li><a href="consultant-management.html">consultant-management</a></li>
            <li><a href="consultant-marketing.html">consultant-marketing</a></li>
            <li><a href="consultant-tax.html">consultant-tax</a></li>
            <li><a href="consultant-travel.html">consultant-travel</a></li>
            <li><a href="about-1.html">about-1</a></li>
            <li><a href="about-2.html">about-2</a></li>
            <li><a href="service-style-1.html">service style -1</a></li>
            <li><a href="service-style-2.html">service style -2</a></li>
            <li><a href="service-style-3.html">service style -3</a></li>
            <li><a href="service-style-4.html">service style -4</a></li>
            <li><a href="service-style-5.html">service style -5</a></li>
            <li><a href="service-style-6.html">service style -6</a></li>
            <li><a href="service-details.html">service details</a></li>
            <li><a href="faq.html">faq</a></li>
            <li><a href="projects.html">project</a></li>
            <li><a href="price-style-1.html">price-style-1</a></li>
            <li><a href="faq.html">price-style-1</a></li>
            <li><a href="project-details.html">project details</a></li>
            <li><a href="blog-style-1.html">blog style -1</a></li>
            <li><a href="blog-details.html">blog details</a></li>
            <li><a href="contact.html">contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
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

          

         
         
          
        <section class="client-area section-spacing">
            <div class="container container-large">
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