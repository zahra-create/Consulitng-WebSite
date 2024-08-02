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
      <div class="body-wrapper consultant-human">

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
            <!--<div class="banner-wrapper">
              <div class="banner-left"> 
                <!--<div class="logo"> 
                  <a href="index.html"><img src="assets/imgs/logo/logo-vertical.webp" alt="logo"></a> 
                </div> -->
                <!--<div class="social-links">
                  <p class="text has-right-line">Follow Us</p>
                  <ul class="social-icons">
                    <li><a href="#"><i class="icon-wcf-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-wcf-wcf-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-instragram"></i></a></li>
                  </ul>-->
                <!--</div> 
              </div> -->
              <div class="banner-right" style="justify-content: center; padding-left:200px;">
                <div class="container container-large">
                  <div class="banner-content-wrapper">
                    <div class="content">
					  <h2 class="title has_fade_anim">Bienvenue chez EHC groupe</h2>
                      <div class="cf_text has_fade_anim" data-delay=".35">
						<p class="text" style="font-size:30spx;">Votre Partenaire pour le Succès en Ressources Humaines.</p>
                      </div>
                      <div class="btn-wrapper has_fade_anim" data-delay=".5">
                        <a href="{{ route('demande-devis') }}" class="cf_btn wc-btn-primary btn-text-flip"><span
                            data-text="Demander services">Demander services </span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"></a>
                      </div>
                      <!--<a href="#" class="scroll-up-btn"> <span>Scroll</span> <i class="icon-wcf-arrow-down-1"></i> </a> -->
                    </div>
                    <div class="thumb-wrapper">
                      <div class="cf_thumb has_fade_anim" data-delay=".65" data-ease="slow(0.7,0.7,false)">
                        <img src="assets/imgs/gallery/img-r-3.png" alt="gallary">
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end intro area -->

          <!-- about area start  -->
          <section id="triggeredSection" class="about-area section-spacing" >
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
                    <div class="title-wrapper has_fade_anim" >
                      <h2 class="section-title" style="color:rgb(0, 81, 81);" >Ayant en moyenne plus de 20 ans
                        d'experience dans leurs domaines de competence</h2>
                    </div>
                  </div>
                  <div class="thumb-wrapper has_fade_anim" data-fade-from="left">
                    <div class="react-shape"  style="background-color:rgb(0, 81, 81);">
                      <span class="text" > </span>
                    </div>
                    <div class="react-thumb">
                      <img src="assets/imgs/gallery/img-r-14.png" alt="about-image">
                    </div>
                  </div>
                  <div class="text-wrapper has_fade_anim">
					  <p class="text">Chez EHC, nous sommes dedies à transformer la gestion des ressources humaines en un atout strategique pour votre entreprise.</p>
                    <p class="text">Avec une equipe d'experts en RH, nous offrons des solutions sur mesure pour optimiser vos processus et attirer les meilleurs talents.</p>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="{{ route('about')}}" class="wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);" > <span data-text="Qui sommes-nous">Qui sommes-nous
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
		  
		  <!-- Valeurs et engagements start  -->
       
          <section class="service-area style-6 section-spacing line-area" style="padding-top:90px;">
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
            <div class="container" >
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="font-size: 60px; color:rgb(0, 81, 81); "><span>POURQUOI EHC ?</span></h2>
                  </div>
            	<div class="subtitle-wrapper has_fade_anim" data-delay=".35" >
				  <p style="font-size: 25px; ">Au coeur de ses valeurs, EHC place la satisfaction de ses partenaires au sommet de ses priorites</p>
                  </div>
                </div>
              </div>
              
              <div class="feature-wrapper" >
                <div class="wcf_iconbox style-8 has_fade_anim">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="assets/imgs/gallery/img-r-33.webp"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">ENGAGEMENT</a></h4>
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
                      <h4 class="title" style="color:rgb(0, 81, 81);">AGILITE</a></h4>
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
                      <h4 class="title" style="color:rgb(0, 81, 81);">EXPERTISE</a></h4>
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
                      <h4 class="title" style="color:rgb(0, 81, 81);">INNOVATION & EXCELLENCE</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
   
 
<!-- Valeurs et engagements end  -->

<!-- BU start -->

          <section class="services-area section-spacing pin__area" style="padding-top:0px;">			
			<div class="container container-large">
              <div class="services-area-inner">
                <div class="section-heading pin__element">
                  <div class="thumb has_fade_anim">
                    <div class="btn-wrapper pos-center btn-move">
                      <a class="cf_btn wc-btn-play light btn-item video-popup" href="assets/video/team-planning.mp4">
                        <i class="fa-solid fa-play"></i>
                      </a>
                    </div>
		    <div style="margin-bottom:20px;">
			<h2 style="font-weight:600;color:rgb(0, 81, 81); font-size:50px;">NOS BUSINESS UNITS</h2> 
			<br>
			<br>
			</div>
        <img src="assets/imgs/gallery/img-s-1.png" alt="image" style="margin-bottom:20px;">
		
		<div class="header__meta d-none d-md-block" style="margin-left:70px;">
            <a href="{{ route('demande-devis') }}" class="cf_btn wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);"><span data-text="Demander services">Demander services</span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"> </a>
          </div>
                  </div>
				  
                  <div class="content has_fade_anim">
                    <div class="">

                    </div>
                  </div>
                </div>
                <div class="services-wrapper">
                  <div class="has_fade_anim">
                    <a href="service-details.html">
                      <div class="service-item">
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">01</span>
                        <div class="content-wrapper">
                          <div class="content">
                            <h3 class="title" style="font-weight:600;color:rgb(0, 81, 81);" data-text="EHC Consulting">EHC Consulting</h3>
                            <p class="text">Votre partenaire stratégique pour une transformation intégrale et performance optimale, alliant expertise en management des organisation digitalisation.</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="has_fade_anim">
                    <a href="service-details.html">
                      <div class="service-item">
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">02</span>
                        <div class="content-wrapper">
                          <div class="content">
                            <h3 class="title" data-text="EHC Recruitment" style="font-weight:600;color:rgb(0, 81, 81);">EHC Recruitment</h3>
                            <p class="text">Une BU dédiée pour recruter avec succès tout type de profil, avec des services sur mesure et un accompagnement intégral .</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="has_fade_anim">
                    <a href="service-details.html">
                      <div class="service-item">
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">03</span>
                        <div class="content-wrapper">
                          <div class="content">
                            <h3 class="title" data-text="EHC Learning" style="font-weight:600;color:rgb(0, 81, 81);">EHC Learning</h3>
                            <p class="text">Spécialisée en formation sur mesure, de l'ingénierie à l'e-learning, avec un soutien complet pour maximiser vos investissements en matière de formation.</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="has_fade_anim">
                    <a href="service-details.html">
                      <div class="service-item">
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">04</span>
                        <div class="content-wrapper">
                          <div class="content">
                            <h3 class="title" data-text="EHC Services & Events" style="font-weight:600;color:rgb(0, 81, 81);">EHC Services & Events</h3>
                            <p class="text">Votre solution tout-en-un en matière de service et d'évènementiel.</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="has_fade_anim" <a href="service-details.html">
                    <div class="service-item">
                      <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">05</span>
                      <div class="content-wrapper">
                        <div class="content">
                          <h3 class="title" data-text="EHC Engineering" style="font-weight:600;color:rgb(0, 81, 81);">EHC Engineering</h3>
                          <p class="text">Votre partenaire pour des solutions informatiques sur mesure, de la conception de module spécifique à la mise en place d'ERP intégrés.</p>
                        </div>
                        <div class="btn-wrapper">
                          <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
		  
          <!-- BU end  -->
		  
		<!-- EHC Chiffres start  --> 

          <section class="counter-area" style="margin-top:0px; padding-top:100px;">
		            <div class="container" >
            <div class="counter-thumb">
              <img src="https://crowdytheme.com/wp/binox/human-resource/wp-content/uploads/sites/6/2024/04/meetingImages.webp" alt="counter-thumb" >
            </div>
          </div>
            <div class="shape-1">
              <img src="assets/imgs/shape/x-shape-3.webp" alt="shape">
            </div>
            <div class="container">
              <div class="counter-item-wrapper">
                <div class="counter-item has_fade_anim" data-fade-from="left" >
                  <h2 class="title" style="color: #005151; font-size:40px; font-weight: 700; padding-top:20px; padding-right:35px;">EHC En Chiffres</h2>
                </div>
                <div class="team-item" style="padding-top:100px;" >
                  <div class="cf_text has_fade_anim" style="width:300px; margin-right:15px; ">
                    <p class="text" style="color: black; font-size: 18px">EHC mobilise pour vous une équipe de haut dirigeants et cadres exerçant dans les sphères des secteurs public et privé et ayant en moyenne plus de 20 ans d'expérience dans leurs domaines de compétence.</p>
                  </div>
				<div class="btn-wrapper" style="margin-top:50px; margin-right:15px;"  >
                      <a href="{{ route('about')}}" class="cf_btn wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);"><span
                          data-text="Découvrir Nos Experts">Découvrir Nos Experts</span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"></a>
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
          <!-- EHC Chiffres end  -->

          <!-- Actualites area start  -->
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
                    <h2 class="section-title" style="color:#005151; font-size: 40px;font-weight:900;">NOS ACTUALITES</h2>
                  </div>
                  <div class="subtitle-wrapper has_fade_anim" data-delay=".35" >
                    <a href="blog-style-1.html" class="section-subtitle" style="font-weight:900;">Voir Plus</a>
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
          <!-- Actualites area end  -->

          <!-- References start  -->
          <div class="brand-area">
            <div class="container">
              <div class="brand-inner">
                <div class="brand-text">
                  <div class="brand-text-title-wrapper" style="padding-top:50px;">
                    <h2 class="title" style="font-weight:900; font-size:23px; color:rgb(0, 81, 81);">Nos partenaires</h2>
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
          <!-- References area end  -->

          @include('partials.disponibility')
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
