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
   <link rel="stylesheet" href="{{ url('assets/css/master-management.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/master-service-style-1.css') }}">
   





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

  <header class="header-area">
    <div class="container container-large">
      <div class="header-area__inner">
        <div class="header__logo d-block d-lg-none">
          <a href="index.html">
            <img src="assets/imgs/logo/logo-horizontal.webp" alt="Site Logo">  
          </a>
        </div>
        <div class="header__nav">
          <nav class="main-menu">
            <ul>
 
              <li class="menu-item-has-no"><a href="about-2.html">A propos</a></li>
              <li class="menu-item-has-children"><a href="service-style-4.html">Services</a>
                <ul class="dp-menu">
                 <!-- <li><a href="service-details.html">Services Entreprise</a></li>
                  <li><a href="service-details.html">Services étudiant</a></li>
                  <li><a href="service-details.html">Services Fonctionnaire</a></li> -->
                  <li><a href="{{ route('service-entreprise') }}">Services Entreprises</a></li>
                  <li><a href="{{ route('service-etudiant') }}">Services Etudiants</a></li>
                  <li><a href="{{ route('service-fonctionnaire') }}">Services Fonctionnaires</a></li>
                  
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Carrières</a>
                <ul class="dp-menu">
                  <li><a href="about-1.html">Offres d'Emploi</a></li>
                  <li><a href="about-2.html">Stages</a></li>
                  <li><a href="team-style-1.html">Candidature spontannee</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a href="service-style-4.html">Medias</a>
                <ul class="dp-menu">
                  <li><a href="blog-style-1.html">Blog</a></li>
                  <li><a href="projects.html">Videos</a></li>
                  <li><a href="blog-style-2.html">Podcasts</a></li>
                </ul>
              </li>
              <li class="menu-item-has-no">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header-right">
          <div class="header__meta d-none d-md-block">
            <a href="contact.html" class="cf_btn wc-btn-primary btn-text-flip"><span data-text="Payer Prestations">Payer Prestations</span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"> </a>
            <a href="contact.html" class="cf_btn wc-btn-primary btn-text-flip"><span data-text="Demander devis">Demander devis
            </span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"> </a>
          </div>
          <div class="header__search d-none d-md-block">
            <div class="search-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			    <!--    <i class="fa-solid fa-gear"></i> -->
               <!-- <i class="fa-solid fa-magnifying-glass"></i>  -->
               <img src="assets/imgs/icon/search.webp" alt="search">
            </div>
          </div>
          <div class="header__nav">
            <button onclick="showCanvas3()" class="open-offcanvas">
              <img src="assets/imgs/icon/bar-dot.webp" alt="menu bar"></button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper consultant-human">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>

        <main>

          <!-- start intro area -->
          <section class="banner-area banner-9">
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="intro-shape-1">
              <img src="assets/imgs/shape/shape-r-1.webp" alt="">    <!--Background-->
            </div>
            <div class="banner-wrapper">
              <div class="banner-left">
                <div class="logo">
                  <a href="index.html"><img src="assets/imgs/logo/logo-vertical.webp" alt="logo"></a> <!--logo-->
                </div>
                <div class="social-links">
                  <p class="text has-right-line">Follow Us</p>
                  <ul class="social-icons">
                    <li><a href="#"><i class="icon-wcf-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-wcf-wcf-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-instragram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="banner-right">
                <div class="container container-large">

                  <div class="banner-content-wrapper">
                    <div class="content">
                      <!--<h2 class="title has_fade_anim">21st-Century HR & Business Solutions</h2>-->
					  <h2 class="title has_fade_anim">Bienvenue chez EHC</h2>
                      <div class="cf_text has_fade_anim" data-delay=".35">
                        <!--<p class="text">Our expertise in effectively handling your HR need.</p>-->
						<p class="text" style="font-size:30spx;">Votre Partenaire pour le Succès en Ressources Humaines.</p>
                      </div>
                      <div class="btn-wrapper has_fade_anim" data-delay=".5">
                        <a href="about-1.html" class="cf_btn wc-btn-primary btn-text-flip"><span
                            data-text="Demander services">Demander services </span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"></a>
                      </div>
                      <a href="#" class="scroll-up-btn"> <span>Scroll</span> <i class="icon-wcf-arrow-down-1"></i> </a>
                    </div>
                    <div class="thumb-wrapper">
                      <div class="cf_thumb has_fade_anim" data-delay=".65" data-ease="slow(0.7,0.7,false)">
                        <img src="assets/imgs/gallery/img-r-37.png" alt="gallary">
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end intro area -->

          <!-- about area start  -->
          <section id="triggeredSection" class="about-area section-spacing">
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="area-shape-1" src="assets/imgs/shape/x-shape-5.webp" alt="shape">
            <div class="container">
              <div class="about-area-inner">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">Ayant en moyenne plus de 20 ans<br>
                        d'experience dans leurs domaines de competence</h2>
                    </div>
                  </div>
                  <div class="thumb-wrapper has_fade_anim" data-fade-from="left">
                    <div class="react-shape">
                      <span class="text" > </span>
                    </div>
                    <div class="react-thumb">
                      <img src="assets/imgs/gallery/img-r-14.png" alt="about-image">
                    </div>
                  </div>
                  <div class="text-wrapper has_fade_anim">
                    <!--<p class="text">We are dedicated to guiding you on your financial journey with expertise, integrity
                      and a personalized approach. we’re highly dedicated to financial journey. Business we operate in
                      is like an intricate keep score with money.</p>
                    <p class="text">Working with <span>binox-HR</span> gives you a peace of mind in real-time, and that
                      your taxes are filed and paid on schedule.</p>-->
					  <p class="text">Chez EHC, nous sommes dedies à transformer la gestion des ressources humaines en un atout strategique pour votre entreprise.</p>
                    <p class="text">Avec une equipe d'experts en RH, nous offrons des solutions sur mesure pour optimiser vos processus et attirer les meilleurs talents.</p>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="contact.html" class="wc-btn-primary btn-text-flip"> <span data-text="Qui sommes-nous">Qui sommes-nous
                     </span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="area-thumb">
              <img src="assets/imgs/gallery/img-s-21.png" alt="hero image">
            </div>
          </section>
          <!-- about area end  -->
		  

        		  <!-- Valeurs et engagements service style 6 start  -->
       
          <section class="service-area style-6 section-spacing line-area">
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="font-size: 60px; "><span>POURQUOI EHC ?</span></h2>
                  </div>
                 <div class="subtitle-wrapper has_fade_anim" data-delay=".35">
					        <p style="font-size: 25px;">Au coeur de ses valeurs, EHC place la satisfaction de ses partenaires au sommet de ses priorites</p>
                  </div> 
                </div>
              </div>
              
              <div class="feature-wrapper">
                <div class="wcf_iconbox style-8 has_fade_anim">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="assets/imgs/gallery/img-r-33.webp"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title"><a href="service-details.html">ENGAGEMENT</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".35">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="assets/imgs/gallery/img-r-34.webp"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title"><a href="service-details.html">AGILITE</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".5">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="assets/imgs/gallery/img-r-35.webp"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title"><a href="service-details.html">EXPERTISE</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".65">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="assets/imgs/gallery/img-r-36.webp"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title"><a href="service-details.html">INNOVATION & EXCELLENCE</a></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
   
 
<!-- Valeurs et engagement feature style 6 end  -->

<!-- BU start -->

		         <section class="service-area pin__area">
            <div class="container container-medium">
              <div class="service-wrapper">
                <div class="section-content">
                  <div class="section-heading pin__element">
                    <div class="section-title-wrapper style-7">
                      <!--<div class="subtitle-wrapper has_fade_anim">
                        <p class="section-subtitle">02 - Service</p>
                      </div>-->
					  
					                <div class="feature-content">
                <div class="section-heading">
                  <div class="section-title-wrapper"> 
                    <div class="title-wrapper">
                      <h2 class="section-title" style="color:#005151; font-size: 60px; font-weight: 600; ">NOS BUSINESS UNITS </h2>
                    </div>
                    <!--<div class="cf_text">
                      <p class="text">Au coeur de ses valeurs, EHC place la satisfaction de ses partenaires au sommet de ses priorités</p>
                    </div>-->
                    <div class="btn-wrapper">
                      <a href="about-1.html" class="cf_btn wc-btn-primary btn-text-flip"><span
                          data-text="Demander sevices" >Demander sevices</span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"></a>
                    </div>
                  </div>
                </div>
              </div>
					  
                     <!-- <div class="title-wrapper has_fade_anim">
                        <h2 class="section-title"><span>Pourquoi</span> EHC ?</h2>
                      </div> 
                      <div class="text-wrapper has_fade_anim">
                        <p class="text">Au coeur de ses valeurs, EHC place la satisfaction desses partenaires au sommet de ses priorités .Pleinement conscient que les systèmes de compétences et de connaissancessont désormais au coeur des enjeux de maîtrise de l'activité productive maisaussi commerciale</p>
                      </div>
                      <div class="btn-wrapper has_fade_anim"">
                        <a href="service-style-2.html" class="btn-link-arrow btn-text-flip"> <span
                            data-text="View All Service">View All
                            Service</span> <i class="fa-solid fa-arrow-right"></i></a>
                      </div>-->
                    </div>
                  </div>
                </div>

                <div class="services-list">
                  <div class="services-item">
                    <p class="count" style="color: #005151; font-size: 30px; font-weight: 500; padding-top: 15px;">01</p>
                    <a href="service-style-1.html">
                      <h2 class="title" style="color: #005151; font-size: 30px; font-weight: 500;">EHC Consulting
                      </h2>
                    </a>
                    <p class="text">Votre partenaire stratégique pour une transformation intégrale et performance optimale, alliant expertise en management des organisation digitalisation.</p>
                    <a href="service-details.html" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count" style="color: #005151; font-size: 30px; font-weight: 500; padding-top: 15px;">02</p>
                    <a href="service-details.html">
                      <h2 class="title" style="color: #005151; font-size:30px; font-weight: 500;" >EHC Recruitment</h2>
                    </a>
                    <p class="text">Une BU dédiée pour recruter avec succès tout type de profil, avec des services sur mesure et un accompagnement intégral .</p>
                    
                    <a href="service-details.html" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count" style="color: #005151; font-size: 30px; font-weight: 500; padding-top: 15px;">03</p>
                    <a href="service-details.html">
                      <h2 class="title" style="color: #005151; font-size: 30px; font-weight: 500;">EHC Learning</h2>
                    </a>
                    <p class="text">Spécialisée en formation sur mesure, de l'ingénierie à l'e-learning, avec un soutien complet pour maximiser vos investissements en matière de formation.</p>
                    
                    <a href="service-details.html" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count" style="color: #005151; font-size: 30px; font-weight: 500; padding-top: 15px;">04</p>
                    <a href="service-details.html">
                      <h2 class="title" style="color: #005151; font-size: 30px; font-weight: 500;">EHC Services & Events</h2>
                    </a>
                    <p class="text">Votre solution tout-en-un en matière de service et d'évènementiel.</p>
                    
                    <a href="service-details.html" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count" style="color: #005151; font-size: 30px; font-weight: 500; padding-top: 15px;">05</p>
                    <a href="service-details.html">
                      <h2 class="title" style="color: #005151; font-size: 30px; font-weight: 500;">EHC Engineering</h2>
                    </a>
                    <p class="text">Votre partenaire pour des solutions informatiques sur mesure, de la conception de module spécifique à la mise en place d'ERP intégrés.</p>
                    
                    <a href="service-details.html" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <!--<div class="services-item">
                    <p class="count">06</p>
                    <a href="service-style-1.html">
                      <h2 class="title">Image de Marque</h2>
                    </a>
                    <!--<p class="text">We have an ambitious road ahead, and we’re looking for people to join our global
                      team.</p>
                    <a href="service-details.html" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div> -->
                </div>
              </div>
            </div>
          </section>
		  
          <!-- BU end  -->
		  

		  
		  		           <!-- testimonial start  -->

            <div class="container">
            </div>

          <!-- testimonial end  -->
          <!-- video area start  -->
		  
          <div class="video-area has_fade_anim">
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="strategy-area-inner">
                <div class="thumb p-relative">
                  <div class="btn-wrapper pos-center btn-move has_fade_anim">
                    <a class="cf_btn wc-btn-play light btn-item video-popup" href="assets/video/video.mp4">
                      <i class="icon-wcf-play-2"></i>
                    </a>
                  </div> 
				  
                  <img src="assets/imgs/gallery/img-r-38.png" alt="image">
                </div>
              </div>
            </div>
          </div> 
		  
          <!-- video area end  -->
		  
		  		           <!-- testimonial start  -->
          <section class="testimonial-area">
            <div class="container">
              <div class="testimonial-top">
                <div class="shape-1">
                  <!--<img src="assets/imgs/shape/shape-r-3.webp" alt=""> -->
                </div>
                <div class="testimonial-review-item has_fade_anim">
                  <!--<h2 class="title">Nos Actualités</h2>-->
				<div class="title-wrapper has_fade_anim">
                    <!--<h2 class="title">Restez informés avec les dernières nouvelles <span>et mises à jour de notre entreprise et de notre domaine.</span></h2>
                  --></div>
                <div class="testimonial-item">
                  <div class="btn-wrapper has_fade_anim" data-fade-from="right">
                    <!--<a href="about-1.html" class="cf_btn wc-btn-primary btn-text-flip"><span data-text="Join Today">Join
                        Today</span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"></a> -->
                  </div>
                </div>
              </div>
            </div>
          </section> 
          <!-- testimonial end  -->
		  
		  
		            <!-- counter area start  --> 
          <div class="container">
            <div class="counter-thumb">
              <img src="https://crowdytheme.com/wp/binox/human-resource/wp-content/uploads/sites/6/2024/04/meetingImages.webp" alt="counter-thumb">
            </div>
          </div>
          <section class="counter-area">
            <div class="shape-1">
              <img src="assets/imgs/shape/x-shape-3.webp" alt="shape">
            </div>
            <div class="container">
              <div class="counter-item-wrapper">
                <div class="counter-item has_fade_anim" data-fade-from="left">
                  <h2 class="title" style="color: #005151; font-size: 35px; font-weight: 700; padding-top: 15px;">EHC En Chiffres</h2>
                </div>
                <div class="team-item">
                  <div class="cf_text has_fade_anim">
                    <p class="text" style="color: black; font-size: 18px">EHC mobilise pour vous une équipe de haut dirigeants et cadres exerçant dans les sphères des secteurs public et privé et ayant en moyenne plus de 20 ans d'expérience dans leurs domaines de compétence.</p>
					<br><br>
					<div class="btn-wrapper">
                      <a href="team-style-1.html" class="cf_btn wc-btn-primary btn-text-flip"><span
                          data-text="Découvrir Nos Experts">Découvrir Nos Experts</span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"></a>
                    </div>
                  </div>
                </div>
                <div class="counter-text has_fade_anim">
                  <ul class="counter-list">
                    <li class="item">
                      <h2 class="section-title wc-counter">3.8x</h2>
                      <p class="text">Economical growth</p>
                    </li>
                    <li class="item">
                      <h2 class="section-title wc-counter">20+</h2>
                      <p class="text">Années d'experiences</p>
                    </li>
                    <li class="item">
                      <h2 class="section-title wc-counter">1.2m</h2>
                      <p class="text">Clients Around the world</p>
                    </li>
                    <li class="item">
                      <h2 class="section-title wc-counter">70+</h2>
                      <p class="text">Team Members</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!-- counter area end  -->

          <!-- blog area start  -->
          <section class="blog-area section-spacing style-1">
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="color:#005151; font-size: 40px;font-weight: 500;">NOS ACTUALITES</h2>
                  </div>
                  <div class="subtitle-wrapper has_fade_anim" data-delay=".35">
                    <a href="blog-style-1.html" class="section-subtitle">Voir Plus</a>
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
                        <span class="date has-left-line">By Patty Hilger</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">Les Tendances Actuelles en Recrutement pour 2024</a></h3>
                      <div class="btn-wrapper">
                        <a href="blog-details.html">Lire Plus</a>
                      </div>
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
                          <span class="date has-left-line">Par Auteur</span>
                      </div>
                      <h3 class="title"><a href="blog-details.html">L'Impact de la Digitalisation sur la Gestion des Ressources Humaines</a></h3>
                      <div class="btn-wrapper">
                        <a href="blog-details.html">Lire Plus</a>
                      </div>
                    </div>
                  </article>
                  <div class="blog-no-thumb has_fade_anim" data-delay=".5">
                    <article class="blog style-1">
                      <div class="content">
                        <div class="meta">
                          <a href="blog-style-1.html"><span class="tag">Coaching</span></a>
                          <span class="date has-left-line">Juillet 27, 2024</span>
                          <span class="date has-left-line">Par Auteur</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">L'equilibre Vie Professionnelle-Vie Personnelle : Un Enjeu Cle pour la Retention des Talents</a></h3>
                        <div class="btn-wrapper">
                          <a href="blog-details.html">Lire Plus</a>
                        </div>
                      </div>
                    </article>
                    <article class="blog style-1">
                      <div class="content">
                        <div class="meta">
                          <a href="blog-style-1.html"><span class="tag">HR</span></a>
                          <span class="date has-left-line">Juillet 27, 2024</span>
                          <span class="date has-left-line">Par Auteur</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">Developper le Leadership au Sein de Votre Entreprise</a></h3>
                        <div class="btn-wrapper">
                          <a href="blog-details.html">Lire Plus</a>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->

          <!-- brand area start  -->
          <div class="brand-area">
            <div class="container">
              <div class="brand-inner">
                <div class="brand-text">
                  <div class="brand-text-title-wrapper">
                    <h2 class="title">Nos partenaires</h2>
                  </div>
                </div>
                <div class="brand-logos">
                  <div class="swiper corporate-brand-slider-active">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="assets/imgs/brand/img-r-1.webp" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="assets/imgs/brand/img-r-2.webp" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="assets/imgs/brand/img-r-3.webp" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="assets/imgs/brand/img-r-4.webp" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="assets/imgs/brand/img-r-5.webp" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="assets/imgs/brand/img-r-6.webp" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="assets/imgs/brand/img-r-5.webp" alt="partner-logo">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="line-horizontal"></div>
          </div>
          <!-- /brand area end  -->


        </main>

        
        <footer class="footer-area style-5">
          <div class="shape">
            <img src="assets/imgs/shape/polygon.webp" alt="polygon">
          </div>
          <div class="container">
            <div class="footer-menu">
              <div class="logo-wrapper">
                <a href="#"><img src="assets/imgs/logo/logo-text-white.webp" alt="site-logo"></a>
                <a href="#" class="scroll-up-btn"> <i class="icon-wcf-arrow-up-5"></i> <span>Go up</span> </a>
              </div>
              <!--<div class="widget-item">
                <h3 class="widget-title">Liens rapides</h3>
                <ul>
                  <li><a href="#"></a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Awards & Recognitions</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div> -->
              <div class="widget-item">
                <h3 class="widget-title">Contact</h3>
                <ul>
                  <li><a href="#">Email</a></li>
                  <li><a href="#">LinkedIn</a></li>
                  <li><a href="#">WhatsApp</a></li>
                  <!--<li><a href="#">Pricing</a></li>-->
                </ul>
              </div>
			  <div class="widget-item">
                <h3 class="widget-title">Localisation</h3>
                <ul>
                  <li class="text">3 Rue du Calvon Bv Abdelmoumen- Casablanca</li>
                </ul>
              </div>
              <div class="widget-item subscribe-form-item">
                <div class="header">
                  <h3 class="title-2">Newsletter</h3>
                  <p>Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités.</p>
                </div>
                <form action="#" class="subscribe-form">
                  <input type="email" placeholder="Enter votre email">
                  <button type="submit" class="subscribe-btn">
                    <i class="icon-wcf-paper-plane"></i></button>
                </form>
              </div>
              
              <!--<div class="widget-item">
                <h3 class="widget-title">Inquiry</h3>
                <ul>
                  <li><a href="#">Contact for appointment</a></li>
                  <li class="title-2"><a href="mailto:inquiry@binox.com">inquiry@binox.com</a></li>
                </ul>
              </div> -->
            </div>
            <div class="footer-copy-wrapper">
              <div class="widget-item">
                <ul class="social-icons">
                  <li><a href="#"><i class="icon-wcf-facebook"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i></a></li>
                  <li><a href="#"><i class="icon-wcf-instragram"></i></a></li>
                  <li><a href="#"><i class="icon-wcf-linkdin-fill"></i></a></li>
                  <li><a href="#"><i class="icon-wcf-youtube"></i></a></li>				  
                </ul>
              </div>
              <p class="copy-text"> &copy; 2024 <a href="#">Expert Humain Capital</a></p>
            </div>
          </div>
        </footer>


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
        pagination: {
          el: ".spagination-style-1",
          type: "fraction",
        },
        loop: true,
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

    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-1",
          prevEl: ".swiper-button-prev.style-1",
        }
      });
    }

    // corporate_brand_slider_active
    if ('.corporate-brand-slider-active') {
      var corporate_brand_slider_active = new Swiper(".corporate-brand-slider-active", {
        slidesPerView: 6,
        loop: true,
        autoplay: true,
        spaceBetween: 60,
        speed: 3000,
        autoplay: {
          delay: .1,
          disableOnInteraction: false,
        },
        breakpoints: {
          // when window width is >= 320px
          375: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 4,
            spaceBetween: 40
          },
          // when window width is >= 1366px
          1366: {
            slidesPerView: 6,
          },
        }
      });
    }
    // testimonial_style_1
    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-3",
          prevEl: ".swiper-button-prev.style-3",
        }
      });
    }

  </script>

</body>

</html>
