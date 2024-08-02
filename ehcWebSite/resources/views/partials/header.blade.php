<header class="header-area">
    <div class="container container-large">
      <div class="header-area__inner">
      <div class="header__logo d-block d-lg-none">
          <a href="index.html">
            <img src="{{ url('assets/imgs/logo/logoEHC.png') }}" alt="Site Logo">  
          </a>
        </div>
        <div class="header__nav">
          <nav class="main-menu">
            <ul>
              <li class="menu-item-has-no"><a href="{{route('about')}}">A propos</a></li>
              <li class="menu-item-has-children"><a href="service-style-4.html">Services</a>
                <ul class="dp-menu">
                 <!-- <li><a href="service-details.html">Services Entreprise</a></li>
                  <li><a href="service-details.html">Services étudiant</a></li>
                  <li><a href="service-details.html">Services Fonctionnaire</a></li> -->
                  <li><a href="{{ route('service-entreprise') }}">Services Entreprises</a></li>
                <li><a href="{{ route('service-fonctionnaire') }}">Services Salariés</a></li>
                <li><a href="{{ route('service-etudiant') }}">Services Etudiants</a></li>
                  
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
                <a href="{{ route('contact') }}">Contact</a>
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
