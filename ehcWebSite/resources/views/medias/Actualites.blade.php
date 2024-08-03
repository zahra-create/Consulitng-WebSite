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
    <link rel="stylesheet" href="{{ url('master-blog-2.css') }}"> 
    <link rel="stylesheet" href="{{ url('master-agency.css') }}"> 
 


   
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

  @include('partials.header')


  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>


        <main>


         <!-- banner area start  -->
          <section class="banner-area p-relative fix zi-1 banner-1"  >
            <div class="swiper baner-active-1" style=" height:100vh; ">
              <div class="swiper-wrapper">
                <div class="swiper-slide" >
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                      <img src="assets/imgs/gallery/Infinity_Recrutement.jpg" alt="offering consultancy">
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                          <span class="subtitle has_fade_anim " data-fade-from="right">RH</span>
                          <div class="title-wrapper has_fade_anim" 
                            data-delay="0.35">
                            <h2 class="title" style=" font-weight:900;">Les Tendances Actuelles en Recrutement pour 2024</h2>
                          </div>
                          <div class="text">
                            <div class="cf_text has_fade_anim" data-delay=".5" data-fade-from="right">
                              <p class="has-top-line">Juillet 27, 2024</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                      <img src="assets/imgs/gallery/Actu.webp" alt="offering consultancy">
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                          <span class="subtitle" style="color:white; ">RH</span>
                          <div class="title-wrapper">
                            <h2 class="title" style="color:white; font-weight:900;">L'Impact de la Digitalisation sur la Gestion des Ressources Humaines</h2>
                          </div>
                          <div class="text">
                            <div class="cf_text">
                              <p class="has-top-line" style="color:white; ">31 Juillet 2024</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                      <img src="assets/imgs/gallery/Equilibre-viepro_vieperso.jpg" alt="offering consultancy">
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                          <span class="subtitle">Coaching</span>
                          <div class="title-wrapper">
                            <h2 class="title" style=" font-weight:900;">L'equilibre Vie Professionnelle-Vie Personnelle</h2>
                          </div>
                          <div class="text">
                            <div class="cf_text">
                              <p class="has-top-line">03 Aout 2024</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pagination-wrapper">
                <div class="container container-large" >
                  <div class="pagination-style-1"></div>
                </div>
              </div>
            </div>
            <!-- <div class="banner-area-vision has_fade_anim" data-delay=".65" data-ease="bounce">
             <div class="btn-wrapper btn-move d-inline-block">
                <a class="cf_btn wc-btn-play light video-popup btn-item" href="assets/video/team-planning.mp4">
                  <i class="icon-wcf-play-2"></i>
                </a>
              </div> -->
            <!--  <div class="text-wrapper">
                <div class="cf_text">
                  <p class="text">We are dedicated to guiding you on your financial journey with expertise and the
                    personal approach.</p>
                </div> 
              </div>
              <img src="assets/imgs/shape/shape-x.webp" alt="" class="shape-x">
            </div> -->
          </section>
          <!-- banner area end  -->


          <!-- blog area start  -->
          <section class="blog-area section-spacing style-1 inner-style-1">
            <div class="container container-large">
              <div class="section-heading">
                <div class="section-title-wrapper style-1">
                  <!--<div class="subtitle-wrapper has_fade_anim">
                    <span class="section-subtitle">Binox blog</span>
                  </div> -->
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="color:#005151; font-size: 40px;font-weight:900;">NOS ACTUALITES</h2>
                  </div>
                </div>
              </div>
              <div class="blog-wrapper-area fix">
                <div class="blog-wrapper">
                  <article class="blog style-1 has_fade_anim">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="assets/imgs/gallery/img-r-7.png" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
					   <a href="blog-style-1.html"><span class="tag">RH</span></a>
                        <span class="date has-left-line">January 29, 2020</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">Les Tendances Actuelles en Recrutement pour 2024</a></h3>
                      <p class="text">Over the past three years, marketers have faced an arduous journey due to the
                        rapid shifts in consumer sentiment and the rising costs associated....</p>
                    </div>
                  </article>
                  <article class="blog style-1 has_fade_anim" data-delay=".35">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="assets/imgs/gallery/img-r-8.png" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                        <a href="blog-style-1.html"><span class="tag">RH</span></a>
                        <span class="date has-left-line">Juillet 27, 2024</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">L'Impact de la Digitalisation sur la Gestion des Ressources Humaines</a></h3>
                      <p class="text">Over the past three years, marketers have faced an arduous journey due to the
                        rapid shifts in consumer sentiment and the rising costs associated....</p>
                    </div>
                  </article>
                  <article class="blog style-1 has_fade_anim" data-delay=".5">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="assets/imgs/blog/img-r-3.webp" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                          <a href="blog-style-1.html"><span class="tag">Coaching</span></a>
                          <span class="date has-left-line">Juillet 27, 2024</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">L'equilibre Vie Professionnelle-Vie Personnelle : Un Enjeu Cle pour la Retention des Talents</a></h3>
                      <p class="text">Over the past three years, marketers have faced an arduous journey due to the
                        rapid shifts in consumer sentiment and the rising costs associated....</p>
                    </div>
                  </article>
                  <article class="blog style-1 has_fade_anim">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="assets/imgs/blog/img-r-4.webp" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                          <a href="blog-style-1.html"><span class="tag">HR</span></a>
                          <span class="date has-left-line">Juillet 27, 2024</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">Developper le Leadership au Sein de Votre Entreprise</a></h3>
                      <p class="text">Over the past three years, marketers have faced an arduous journey due to the
                        rapid shifts in consumer sentiment and the rising costs associated....</p>
                    </div>
                  </article>
                  <article class="blog style-1 has_fade_anim" data-delay=".35">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="assets/imgs/blog/img-r-5.webp" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                        <a href="blog-style-1.html"><span class="tag">Business</span></a>
                        <span class="date has-left-line">January 29, 2020</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">How to create your purpose-filled career comfortable
                          clothes</a></h3>
                      <p class="text">Over the past three years, marketers have faced an arduous journey due to the
                        rapid shifts in consumer sentiment and the rising costs associated....</p>
                    </div>
                  </article>
                  <article class="blog style-1 has_fade_anim" data-delay=".5">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="assets/imgs/blog/img-r-6.webp" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                        <a href="blog-style-1.html"><span class="tag">Business</span></a>
                        <span class="date has-left-line">January 29, 2020</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">Sitting with your basic goodness
                          top signs that time.</a></h3>
                      <p class="text">Over the past three years, marketers have faced an arduous journey due to the
                        rapid shifts in consumer sentiment and the rising costs associated....</p>
                    </div>
                  </article>
                </div>
               <!-- <ul class="pagination style-1 has_fade_anim">
                  <li><a href="#">1</a></li>
                  <li><a class="current" href="#">2</a></li>
                  <li><a href="#">Next <img src="assets/imgs/icon/arrow-next-icon.webp" alt="arrow-icon"></a></li>
                </ul> -->
              </div>
            </div>
          </section>
          <!-- blog area end  -->


 



          <!-- cta area start  -->

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

  <script>

    // intro slider 
    if (('.baner-active-1').length) {
      var baner_active = new Swiper(".baner-active-1", {
        speed: 1000,
        pagination: {
          el: ".spagination-style-1",
          type: "fraction",
        },
        loop: true,
        autoplay: true,
        slidesPerView: 1,
        spaceBetween: 0,
        mousewheel: false,
        pagination: {
          el: '.pagination-style-1',
          type: 'fraction',
          clickable: true,

          renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' + ' <span class="dash"></span> ' + '<span class="' + totalClass + '"></span>';
          }
        },
      });
    }
    // testimonial
    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        speed: 1500,
        navigation: {
          nextEl: ".swiper-button-next.style-1",
          prevEl: ".swiper-button-prev.style-1",
        }
      });
    }


  </script>

</body>

</html>