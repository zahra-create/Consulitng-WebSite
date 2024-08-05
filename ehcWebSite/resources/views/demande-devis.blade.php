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

  @include('partials.header')

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>


        <main>
         		

          <!-- contact intro start  -->
          <section class="contact-intro">
            <div class="container">
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <!--<div class="subtitle-wrapper has_fade_anim">
                    <span class="section-subtitle">Demander devis</span>
                  </div> -->
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style=" color:#005153;" >Bienvenue sur notre page de demande de devis.</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="location-thumb has_fade_anim">
              <img src="assets/imgs/gallery/devis.jpg" alt="demande-devis">
              <div class="container">
                <div class="location-info-wrapper has_fade_anim">
                  <div class="location-info">
                   <!-- <div class="logo">
                      <img src="assets/imgs/logo/logo.webp" alt="logo">
                    </div>
                    <h3 class="title">Bienvenue sur notre page de demande de devis</h3> -->
                    <!--<ul class="info-list">
                      <li><a href="#">+01-75-0660-605</a></li>
                      <li><a href="#">hello@binox-consultant.com</a></li>
                    </ul> -->
                    <p class="text">En tant qu'experts en ressources humaines, nous sommes dédiés à vous fournir des solutions sur mesure pour répondre à vos besoins spécifiques.</p>
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
                  <div class="section-title-wrapper style-6">
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">Demander
                        <span>un</span>
                        devis 
                      </h2>
                    </div>
                  </div>
                  <div class="line-vertical"></div>
                 <!-- <div class="meta-list has_fade_anim">
                    <ul>
                      <li><a href="mailto:inquiry@binox.com">LiveChat@binox.skype</a></li>
                    </ul>
                  </div> -->
                  <div class="logo has_fade_anim">
                    <a href="#"><img src="assets/imgs/logo/logo.webp" alt="logo"></a>
                  </div>
                </div>
                <div class="contact-wrapper has_fade_anim">
                  <form>
                    <div class="wc-single-input">
                      <label for="name" class="wc-form-label">Nom</label>
                      <input type="text" id="name">
                    </div>
                    <div class="wc-single-input">
                      <label for="email" class="wc-form-label">Prénom</label>
                      <input type="text" id="email">
                    </div>
                    <div class="wc-single-input">
                      <label for="phone" class="wc-form-label">Email</label>
                      <input type="text" id="phone">
                    </div>
                    <div class="wc-single-input">
                      <label for="company" class="wc-form-label">Téléphone</label>
                      <input type="text" id="company">
                    </div>
                    <div class="wc-single-input">
                      <label for="website" class="wc-form-label">Entreprise</label>
                      <input type="text" id="website">
                    </div>
                    <div class="wc-single-input">
                      <label for="website" class="wc-form-label">Service</label>
                      <select>
                      <option value="1" selected>Conseil</option>
                        <option value="2">Recrutement</option>
                        <option value="3">Formation</option>
						<option value="4" >Evènement et Services aux entreprises</option>
                        <option value="5">Management de projet clé en main</option>
                        <option value="6">Digitalisation</option>
                      </select>
                    </div>
                    <div class="wc-single-input">
                      <label for="message" class="wc-form-label">Description</label>
                      <textarea id="message" placeholder="Décrire votre besoin....."></textarea>
                    </div>
                    <div class="btn-wrapper">
                      <button type="submit" class="wc-btn-primary btn-text-flip"><span data-text="Demander Devis">Demander Devis
                         </span> <i class="fa fa-caret-right"></i> </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- contact area end  -->

		
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