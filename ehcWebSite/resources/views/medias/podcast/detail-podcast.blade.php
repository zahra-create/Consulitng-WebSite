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
    <link rel="stylesheet" href="{{ url('assets/css/detail-podcast.css') }}">


   
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
      <!--<button id="switcher_open"><i class="fa-solid fa-gear"></i></button>-->
	  <button id="switcher_open"><i class="fa-solid fa-robot"></i></button>
      <!--<button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>-->
    </div>

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
            <li><a href="consultant-human.html">consultant-human</a></li>

            <li><a href="about-2.html">about-2</a></li>

            <li><a href="service-style-4.html">service style -4</a></li>

            <li><a href="service-details.html">service details</a></li>

            <li><a href="projects.html">project</a></li>

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
			<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>   <!--Recherche-icon-->
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

  @include('partials.navbar')

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
			   <div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left" >

       <!--<div class="player" style="height:300px; width:200;">-->
       <div class="wrapper" style=" height:450px; margin-right:70px; background-color:#00515114;">  <!--style="width:250; height:400px; "-->
           <div class="details">
               <div class="now-playing">PLAYING x OF y</div>
               <!--<div class="track-art>--> <img class="track-art" src="assets/imgs/podcasts/femme.png" alt="podcast"><!-- </div>-->
               <div class="track-name">Track Name</div>
               <div class="track-artist">Track Artist</div>
           </div>

           <div class="slider_container">
               <div class="current-time">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                <div class="total-duration">00:00</div>
           </div>

           <div class="slider_container">
               <i class="fa fa-volume-down"></i>
                <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                <i class="fa fa-volume-up"></i>
           </div>

           <div class="buttons" style="font-size:0.75rem; ">

               <div class="prev-track" onclick="prevTrack()">
                    <i class="fa fa-step-backward fa-2x"></i>
                </div>
                <div class="playpause-track" onclick="playpauseTrack()" >
                    <i class="fa fa-play-circle fa-5x"></i>
                </div>
                <div class="next-track" onclick="nextTrack()">
                    <i class="fa fa-step-forward fa-2x"></i>
                </div>

           </div>

        <!--    <div id="wave">
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
            </div>   -->
       </div>
   <!-- </div> -->
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
                          <!-- <div class="author"> 
                            <div class="avatar"><i class="fa-regular fa-circle-play" style="color:#005151;"></i></div>
                          </div> -->
                          <div class="content-wrapper">
						  <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span>
                            </div>
                            <div class="content">
                              <h2 class="title">Épisode 1:Histoires de Réussite</h2>
                              <p class="text">Voyage professionnel : Témoignages de femmes qui ont réussi dans notre entreprise.....</p>
                            </div>
                          </div>
                        </article>
                      </a>
					<a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="content-wrapper">
						  <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span>
                            </div>
                            <div class="content">
                              <h2 class="title">Épisode 2:Histoires de Réussite</h2>
                              <p class="text">Voyage professionnel : Témoignages de femmes qui ont réussi dans notre entreprise.....</p>
                            </div>
                          </div>
                        </article>
                      </a>
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="content-wrapper">
						  <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span>
                            </div>
                            <div class="content">
                              <h2 class="title">Épisode 3:Histoires de Réussite</h2>
                              <p class="text">Voyage professionnel : Témoignages de femmes qui ont réussi dans notre entreprise.....</p>
                            </div>
                          </div>

                        </article>
                      </a>
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="content-wrapper">
						  <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span>
                            </div>
                            <div class="content">
                              <h2 class="title">Épisode 4:Histoires de Réussite</h2>
                              <p class="text">Voyage professionnel : Témoignages de femmes qui ont réussi dans notre entreprise.....</p>
                            </div>
                          </div>
                        </article>
                      </a>
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="content-wrapper">
						  <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span>
                            </div>
                            <div class="content">
                              <h2 class="title">Épisode 5:Histoires de Réussite</h2>
                              <p class="text">Voyage professionnel : Témoignages de femmes qui ont réussi dans notre entreprise.....</p>
                            </div>
                          </div>
                        </article>
                      </a>
                      <a href="blog-details.html">
                        <article class="blog style-2">
                          <div class="content-wrapper">
						  <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span>
                            </div>
                            <div class="content">

                              <h2 class="title">Épisode 6:Histoires de Réussite</h2>
                              <p class="text">Voyage professionnel : Témoignages de femmes qui ont réussi dans notre entreprise.....</p>
                            </div>
                          </div>
                        </article>
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->


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