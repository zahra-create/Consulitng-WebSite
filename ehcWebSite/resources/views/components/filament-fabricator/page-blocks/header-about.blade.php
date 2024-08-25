@aware(['page'])
@props(['titre', 'SousTitre' ,'content','images'])
<section class="about-area section-spacing">
            <div class="container container-large">
              <div class="about-area-inner">
                <div class="section-heading">
                  <div class="section-title-wrapper">
                    <div class="subtitle-wrapper has_fade_anim" data-fade-from="left">
                      <span class="section-subtitle">{{$titre}}</span>  <!--à propos de nous-->
                    </div>
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">{{ $SousTitre}}</h2>
                    </div>
                  </div>
                </div>
                <div class="about-content">
                  <div class="thumb-first has_fade_anim" >
                    <img src="assets/imgs/gallery/hero-img-1.webp" alt="about image">
                  </div>
                  <div class="text-box-wrapper has_fade_anim" data-delay=".6">
                    <div class="text-box">
                      <div class="text-wrapper">
                       <!-- <p class="text" >
                        Experts Human Capital est un groupe de conseil en ingénierie et services,
                         dédié à accompagner 
                        les organisations dans leur stratégie de développement. 
                        Grâce à l'expertise et au sens éthique de nos consultants, nous nous 
                        positionnons comme un partenaire privilégié dans divers domaines du 
                        management des organisations. Nos valeurs d'engagement, d'innovation, 
                        d'agilité, d'expertise et d'excellence nous permettent de fournir des 
                        solutions sur mesure, favorisant la croissance et l'innovation de nos clients.
                        En choisissant EHC, vous bénéficiez d'un accompagnement personnalisé et d'une expertise éprouvée pour propulser votre organisation vers de nouveaux sommets. Ensemble, nous transformons vos défis en opportunités de succès.</p>-->
                        <p class="text" >
                        {!! $content !!}
                       </p>
                    
                      </div>
                      <div class="separator"></div>
                      <div class="scroll-btn btn-move">
                        <a href="#" class="circle-text btn-item">
                          <img src="assets/imgs/shape/scroll-down-text-2.webp" alt="image" class="show-dark text">
                          <img src="assets/imgs/shape/scroll-down-text-2.webp" alt="image" class="show-light text">
                          <img src="assets/imgs/shape/text-since.webp" alt="image" class="show-dark icon">
                          <img src="assets/imgs/shape/text-since.webp" alt="image" class="show-light icon">
                        </a>
                      </div>
                    </div>
                    <div class="thumb-second has_fade_anim">
                      <img src="assets/imgs/gallery/about-img-2.webp" alt="about image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>