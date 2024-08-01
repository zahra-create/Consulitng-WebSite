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
      <link rel="stylesheet" href="{{ url('assets/css/master-service-style-1.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/master-contact.css') }}">  
   
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
         		
          <!-- contact intro start  -->
          <section class="contact-intro" >
            <div class="container" >			
              <div class="section-heading">
                <div class="section-title-wrapper">
                 <!-- <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="color: #005151; font-size:73px; font-weight: 700; padding-top: 20px; ">Contactez-nous pour toute information ou assistance.</h2>
                  </div> -->
                </div>
              </div> 
            </div> 
            <div class="location-thumb has_fade_anim" >
              <img src="assets/imgs/gallery/img-r-17.webp" alt="contact">
              <div class="container">
                <div class="location-info-wrapper has_fade_anim">
                  <div class="location-info">
                    <div class="logo">
                    <!--<h3 class="title" style="font-size:50px;">Contactez-nous pour toute information ou assistance.</h3> -->
                    </div>
					<h3 class="title" style="color: #005151;">Contactez-nous pour toute information ou assistance.</h3> 
  
					<h3 class="title" style="color: #005151;  font-weight: 800; font-size:30px;">
					Nous sommes là pour vous aider ! 
                    </h3>
                  </div>
                </div>
              </div>
            </div>
					
          </section>
          <!-- contact intro end  -->

          <!-- contact area start  -->
          <section class="contact-area section-spacing">
            <div class="container">
              <div class="contact-area-inner">
                <div class="section-heading">
				 <div class="line-vertical"></div>
                  <div class="section-title-wrapper style-6">
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title" style="font-weight: 800; font-size:30px;"  >Nous 
					    Sommes 
                        là
                        Pour 
                        vous
                        Aider !
                      </h2>
                    </div>
                  </div>
                  <div class="line-vertical"></div>
                  <!-- <div class="meta-list has_fade_anim">
                    <ul>
                      <li><a href="mailto:inquiry@binox.com">LiveChat@binox.skype</a></li>
                    </ul>
                  </div> -->
                  <!--<div class="logo has_fade_anim">
                    <a href="#"><img src="assets/imgs/logo/logo.webp" alt="logo"></a>
                  </div> -->
                </div>
                <div class="contact-wrapper has_fade_anim">
                  <form>
                    <div >
                    </div>
					<div class="wc-single-input">
                      <label for="name" class="wc-form-label">Nom</label>
                      <input type="text" id="name">
                    </div>
					<div class="wc-single-input">
                      <label for="name" class="wc-form-label">Prénom</label>
                      <input type="text" id="prenom">
                    </div>
                    <div class="wc-single-input">
                      <label for="email" class="wc-form-label">Email</label>
                      <input type="text" id="email">
                    </div>
                    <div class="wc-single-input">
                      <label for="Objet" class="wc-form-label">Objet</label>
                      <input type="text" id="Objet">
                    </div>
					<div></div>
                    <div class="wc-single-input">
                      <label for="message" class="wc-form-label">Message</label>
                      <textarea id="message" placeholder="Écrivez votre message ....."></textarea>
                    </div>
                    <div class="btn-wrapper">
                      <button type="submit" class="wc-btn-primary btn-text-flip"><span data-text="Envoyer">Envoyer
                          </span> <i class="fa fa-caret-right"></i> </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- contact area end  -->

          <!-- cta area start  -->
          <div class="cta-area style-1">
            <div class="container container-large">
              <div class="cta-area-wrapper">
               <!-- <div class="cta-left">
                  <ul class="cta-info">
                    <li>
                      <h3 class="title">Saturday - Thursday :</h3>
                      <span>8:30 am - 10:45 pm</span>
                    </li>
                  </ul>
                </div>
                <div class="cta-right">
                  <div class="btn-wrapper">
                    <a class="cf_btn wc-btn-underline btn-text-flip" href="blog-style-1.html"><span
                        data-text="Call for an appointment">Call for an appointment</span><img
                        src="assets/imgs/icon/arrow-triangle.webp" alt=""></a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- cta area end  -->


        <!-- contact intro start  -->
          <section class="contact-intro">

            <div class="location-thumb has_fade_anim">
              <img src="assets/imgs/gallery/map.webp" alt="location-image">
              <div class="container">
                <div class="location-info-wrapper has_fade_anim">
                  <div class="location-info">
                    <div class="logo">
                      <img src="assets/imgs/logo/logo.webp" alt="logo">
                    </div>
                    <h3 class="title">Contact info:</h3>
                    <ul class="info-list">
                      <li><a href="#">+212 6 63-80-85-01</a></li>
                      <li><a href="#">contact@expertshumancapital.com</a></li>
                    </ul>
                    <p class="text">Rue du Calvon Bv Abdelmoumen- Casablanca</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- contact intro end  -->
		
          @include('partials.disponibility')
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