<header class="header-area style-1 pos-abs zi-9">
    <div class="container container-large">
      <div class="header-area__inner">
        <div class="header__logo">
          <a href="index.html">
            <img src="{{ url('assets/imgs/logo/logoEHC.png') }}" alt="Site Logo">
          </a>
        </div>
        <div class="header__nav ">
          <nav class="main-menu">
            <ul>
              <li class="menu-item-has-children"><a href="index.html">home</a>
                <ul class="dp-menu">
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
                </ul>
              </li>
              <li class="menu-item-has-children"><a href="service-style-1.html">service</a>
                <ul class="dp-menu">
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
            <li><a href="{{ route('Podcasts') }}">Podcasts</a></li>
          </ul>
        </li>
        <li class="menu-item-has-no">
          <a href="{{ route('contact') }}">Contact</a>
        </li>
            </ul>
          </nav>
        </div>
        <div class="header__meta">
          <a href="contact.html" class="wc-btn-primary btn-text-flip"> <span data-text="Payer Prestations">Payer Prestations</span> <i class="fa-solid fa-caret-right"></i></a>
        </div>
        <div class="header__meta">
          <a href="{{ route('demande-devis') }}" class="wc-btn-primary btn-text-flip"> <span data-text="Demander devis">Demander devis</span> <i class="fa-solid fa-caret-right"></i></a>
        </div>
        <div class="header__search">
          <div class="search-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="icon-wcf-search"></i>
          </div>
        </div>
        <div class="header__nav pos-centericon">
          <button onclick="showCanvas3()" class="open-offcanvas">
            <span class="icon-wcf-menu-bar-1"></span> </button>
        </div>
      </div>
    </div>
  </header>