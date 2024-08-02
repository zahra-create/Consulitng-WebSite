<header class="header-area style-1 pos-abs zi-9">
          <div class="container container-large">
            <div class="header-area__inner" style="margin-left:-90px ">     <!--style="margin-left:-55px"-->
            <div class="header__logo" >              <!--margin-top:10px;-->
                <a href="{{ route('home') }}">
                  <img src="{{ url('assets/imgs/logo/logoEHC.png') }}" alt="Site Logo"  >
                </a>
              </div> 
              <div class="header__nav ">
                <nav class="main-menu" >
                  <ul>
                    <li class="menu-item-has-no"><a href="{{route('about')}}" style="width:111px; ">A propos</a></li>
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
                  <li><a href="{{ route('playlists') }}">Videos</a></li>
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
                <a href="contact.html" class="wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);"> <span data-text="Payer Prestations">Payer Prestations</span> <i class="fa-solid fa-caret-right"></i></a>
              </div>
              <div class="header__meta">
                <a href="{{ route('demande-devis') }}" class="wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);" > <span data-text="Demander devis">Demander devis</span> <i class="fa-solid fa-caret-right"></i></a>
              </div>
              <div class="header__search">
                <div class="search-icon" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color:rgb(0, 81, 81);">
                  <i class="icon-wcf-search" ></i>
                </div>
              </div>
              <!--<div class="header__nav pos-centericon">
                <button onclick="showCanvas3()" class="open-offcanvas">
                  <span class="icon-wcf-menu-bar-1"></span> </button>
              </div> -->
            </div>
          </div>
        </header>