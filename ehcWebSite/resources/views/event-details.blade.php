<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title> service & event</title>

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
                    <img src="assets/imgs/gallery/xxx" alt="" class="shape-1">
                    <div class="details-intro-content">
                      <div class="title-box">
                        <div class="section-title-wrapper">
                          <div class="subtitle-wrapper has_fade_anim" data-fade-from="left">
                            <span class="details-text section-subtitle">détails</span>
                          </div>
                          <div class="title-wrapper has_fade_anim">
                            <h1 class="section-title details-title large">EHC</h1>
                            <h1 class="section-title details-title large"> EVENTS</h1>
                          </div>
                        </div>
                      </div>
                      <div class="text-box">
                        <div class="text-wrapper">
                          <div class="cf_text has_fade_anim">
                            <p class="justify details-text text">Votre partenaire pour une transformation complète et une performance optimale, combinant expertise en management et digitalisation.</p>
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
                    <img src="{{ url('assets/imgs/gallery/event1.jpg') }}" alt="service image">
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
                        <h2 class=" details-title section-title">Événements de Qualité !</h2>
                      </div>
                    </div>
                    <div class="text-wrapper">
                      <p class="justify details-text text">Optimisez votre organisation avec notre expertise en management et digitalisation.
                         Nous vous accompagnons dans la gestion de projets, la transformation numérique, et l'optimisation de vos processus pour des performances globales améliorées.</p>
                    </div>
                    <div class="details-feature-content">
                      <h3 class="details-title title">Nos offres événementielles</h3>
                      <div class="feature-list-wrapper">
                        <ul class="feature-list">
                          <li><span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <p class="justify details-text text">Accompagnement stratégique pour la transformation numérique de votre organisation, en intégrant les meilleures pratiques et solutions innovantes.</p>
                          </li>
                          <li><span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <p class="justify details-text text">Gestion optimisée des ressources humaines, avec des solutions adaptées pour le recrutement, la gestion des talents, et le développement des compétences.</p>
                          </li>
                          <li><span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <p class="justify details-text text">Analyse et amélioration des processus opérationnels pour augmenter l'efficacité et la performance globale de votre entreprise.</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="details-feature-content">
                      <h3 class="details-title title">Que Propose EHC Events ?</h3>
                      <div class="feature-list-wrapper">
                        <ul class="service-feature-list list-plus">
                          <li class="justify details-text">Stratégies de transformation numérique</li>
                          <li class="justify details-text">Techniques de gestion des ressources humaines</li>
                          <li class="justify details-text">Méthodes d'amélioration de la performance</li>
                        </ul>
                      </div>
                    </div>
                <!--    <div class=" btn-wrapper">
                      <a href="contact.html" class="wc-btn-primary btn-text-flip"> <span data-text="Contact us">Contact
                          us</span> <i class="fa-solid fa-caret-right"></i></a>
                    </div> -->
                  </div>
                  <div class="thumb has_fade_anim" data-fade-from="right">
                    <img src="{{ url('assets/imgs/gallery/event2.jpg') }}" alt="service image">
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
                  <img src="{{ url('assets/imgs/gallery/event3.jpg') }}" alt="gallery">
                </div>
                <div class="container">
                  <div class="section-content">
                    <div class="counter-box-wrapper">
                      <span class="shadow shadow-1"></span>
                      <span class="shadow shadow-2"></span>
                      <span class="shadow shadow-3"></span>
                      <div class="counter-box">
                        <h2 class="number has_fade_anim">30<span>+</span></h2>
                        <h3 class="text has_fade_anim">années d'expérience
                      </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- experience area end  -->
            </div>

            <!-- faq area start  -->
         <!--  <div class="faq-area section-spacing pb-0">
              <div class="container container-large">
                <div class="faq-area-inner">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">Frequently
                        asked question</h2>
                    </div>
                  </div>
                  <div class="accordion-wrapper has_fade_anim">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What services does your consultancy company provide?
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            How can I contact your consultancy firm?
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                          aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            What industries does your consultancy company specialize in?
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform..</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            How does the consultation process work?
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            What sets your consultancy services apart from others?
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            How much do your consultancy services cost?
                          </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSeven" aria-expanded="false"
                            aria-controls="flush-collapseSeven">
                            Can you provide references or case studies?
                          </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseEight" aria-expanded="false"
                            aria-controls="flush-collapseEight">
                            Is my business size suitable for your consultancy services?
                          </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                          aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">You can reach us through our contact page on the website where
                            you'll find our phone on number email address and a convenient contact form we are also
                            available on social media platforms such as list relevant platform.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- faq area end  -->


          </section>
          <!-- service details area end  -->

          <!-- cta area start  -->
          <div class="cta-area style-1">
            <div class="container container-large">
              <div class="cta-area-wrapper">
                <div class="cta-left">
                  <ul class="cta-info">
                    <li>
                      <p class="title"></p>
                      <span>Ouvert tous les jours de 8h30 à 22h45</span>
                    </li>
                  </ul>
                </div>
                <div class="cta-right">
                  <div class="btn-wrapper">
                    <a class="cf_btn wc-btn-underline btn-text-flip" href="contact.html"><span
                        data-text="Planifier un rendez-vous">Planifier un rendez-vous</span><img
                        src="assets/imgs/icon/arrow-triangle.webp" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- cta area end  -->

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