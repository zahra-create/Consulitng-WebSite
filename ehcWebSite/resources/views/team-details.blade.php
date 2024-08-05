<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Binox Team Details</title>

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
  <link rel="stylesheet" href="assets/css/master-team-details.css">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">





</head>


<body class="font-heading-hkgrotesk-bold">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="B" class="characters">B</span>
          <span data-text="I" class="characters">I</span>
          <span data-text="N" class="characters">N</span>
          <span data-text="O" class="characters">O</span>
          <span data-text="X" class="characters">X</span>
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

          <!-- team details start  -->
          <section class="team-details">
            <div class="container">
              <div class="team-details-wrapper">
                <div class="team-content">
                  <h2 class="title has_fade_anim">Ali <br> Benomar</h2>
                  <ul class="social-icons has_fade_anim" data-delay=".35">
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                  </ul>
                  <p class="text has_fade_anim">Ali Benomar est un ingénieur logiciel senior chez EHC, reconnu pour son expertise en développement de solutions 
                    technologiques innovantes. Avec plus de dix ans d'expérience dans le domaine, Ali excelle dans la conception et l'implémentation de systèmes 
                    logiciels robustes et évolutifs. Passionné par les nouvelles technologies, 
                    il maîtrise plusieurs langages de programmation et possède une connaissance approfondie des architectures cloud.</p>
                  <p class="text has_fade_anim">Ali est également un excellent mentor, toujours prêt à partager ses connaissances et à aider ses collègues à surmonter 
                    les défis techniques. Son engagement envers l'excellence et son esprit d'équipe font de lui un atout précieux pour EHC. Grâce à sa compétence et à son dévouement, 
                    Ali contribue significativement au succès et à la croissance de l'entreprise.</p>
                  <div class="btn-wrapper has_fade_anim" data-on-scroll="0">
                    <a href="contact.html" class="wc-btn-primary btn-text-flip"> <span data-text="Contact Now">Contact
                        Now</span> <i class="fa-solid fa-caret-right"></i></a>
                  </div>
                </div>
                <div class="team-thumb has_fade_anim" data-fade-from="right">
                  <img src="assets/imgs/team/team-details-img.webp" alt="image">
                </div>
              </div>
            </div>
          </section>
          <!-- /team details end  -->

          <!-- newsletter start  -->
          <section class="newsletter-area">
            <div class="container">
              <div class="newsletter-wrapper">
                <div class="newsletter-content">
                  <div class="section-heading">
                    <div class="section-title-wrapper style-1">
                      <div class="subtitle-wrapper has_fade_anim">
                        <span class="section-subtitle">Newsletter</span>
                      </div>
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title">Join the community</h1>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="newsletter-form has_fade_anim">
                  <form action="#">
                    <div class="input-field">
                      <label for="name">Your name</label>
                      <input type="text" id="name">
                    </div>
                    <div class="input-field">
                      <label for="companyname">Company name</label>
                      <input type="text" id="companyname">
                    </div>
                    <div class="input-field">
                      <label for="email">Email address</label>
                      <input type="text" id="email">
                    </div>
                    <div class="btn-wrapper">
                      <button type="submit" class="wc-btn-primary btn-text-flip"> <span data-text="Submit now">Submit
                          now</span> <i class="fa-solid fa-caret-right"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- /newsletter end  -->

          <!-- testimonial area start  -->
          <div class="testimonial-section section-spacing has_fade_anim">
            <div class="container">
              <div class="testimonial-inner style-2">
                <div class="swiper testimonial testimonial style-2">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="testimonial-item style-2">
                        <div class="content">
                          <div class="text-wrapper">
                            <div class="quote-icon-wrap">
                              <img src="assets/imgs/icon/quote.webp" alt="Quote Icon" class="quote-icon">
                            </div>
                            <p class="text">Grâce à l'accompagnement personnalisé de l'équipe EHC, notre organisation a pu naviguer avec succès à travers des projets
                                complexes de transformation digitale. 
                               Leur expertise et leur sens éthique ont été déterminants dans notre réussite.</p>
                          </div>
                          <div class="meta">
                            <p class="name">Mark Henry</p>
                            <p class="post">Developer, Oklavery</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item style-2">
                        <div class="content">
                          <div class="text-wrapper">
                            <div class="quote-icon-wrap">
                              <img src="assets/imgs/icon/quote.webp" alt="Quote Icon" class="quote-icon">
                            </div>
                            <p class="text">'engagement et l'innovation démontrés par EHC ont surpassé nos attentes. 
                                Leur approche sur mesure a permis de répondre précisément à nos besoins, 
                                stimulant ainsi notre croissance et notre compétitivité.</p>
                          </div>
                          <div class="meta">
                            <p class="name">Mark Henry</p>
                            <p class="post">Developer, Oklavery</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item style-2">
                        <div class="content">
                          <div class="text-wrapper">
                            <div class="quote-icon-wrap">
                              <img src="assets/imgs/icon/quote.webp" alt="Quote Icon" class="quote-icon">
                            </div>
                            <p class="text">We’ve had bad experiences with call centers through binox. We hired my own
                              remote
                              team that I have complete control over the remote team that means work from home at
                              anywhere</p>
                          </div>
                          <div class="meta">
                            <p class="name">Mark Henry</p>
                            <p class="post">Developer, Oklavery</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next style-2"><span class="case-upper">Next</span></div>
                <div class="swiper-button-prev style-2"><span class="prev-text case-upper">Prev</span></div>
              </div>
            </div>
          </div>
          <!-- testimonial area end  -->

          <!-- cta area start  -->
          @include('partials.disponibility')
          <!-- cta area end  -->

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

</body>

</html>