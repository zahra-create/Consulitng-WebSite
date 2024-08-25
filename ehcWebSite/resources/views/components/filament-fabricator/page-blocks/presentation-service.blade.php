@aware(['page'])
@props(['Introtitre','Introcontent','Services'])


<section class="service-area style-5 pin__area">
            <div class="container container-medium">
              <div class="service-wrapper">
<div class="section-content">
                  <div id="pinElement" class="section-heading pin__element">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title">{{$Introtitre}}</h1> <!--Bienvenue chez les services EHC-->
                      </div>
                      <div class="text-wrapper has_fade_anim">
                       <!-- <p class="text">Profitez de solutions sur mesure pour optimiser votre performance et le développement de vos équipes.</p>-->
                       <p class="text">{{$Introcontent}}</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="services-list has_fade_anim">
                  <div class="services-item">
                    <p class="count">01</p>
                    <a href="{{ url('conseil') }}">
                      <h2 class="title">Conseil</h2>
                    </a>
                    <p class="text">Gérez efficacement vos ressources humaines et assurez une transfomation évolutive de votre entreprise.</p>
                    <a href="{{ url('conseil') }}" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count">02</p>
                    <a href="{{ url('recruitement') }}">
                      <h2 class="title">Recruitement</h2>
                    </a>
                    <p class="text">Recrutez des cadres dirigeants via concours publics et tests d'évaluation.</p>
                    <a href="{{ url('recruitement') }}" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count">03</p>
                    <a href="{{ url('formation') }}">
                      <h2 class="title">Formation</h2>
                    </a>
                    <p class="text">Mise en place de plans de formation et accompagnement pour le remboursement des formations.</p>
                    <a href="{{ url('formation') }}" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count">04</p>
                    <a href="{{ url('event') }}">
                      <h2 class="title">Evénements</h2>
                    </a>
                    <p class="text">Votre solution tout-en-un en matière de service et d’évènementiel.</p>
                    <a href="{{ url('event') }}" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                  <div class="services-item">
                    <p class="count">05</p>
                    <a href="{{ url('ingenierie') }}">
                      <h2 class="title">Ingénierie
                      </h2>
                    </a>
                    <p class="text">Votre partenaire pour des solutions informatiques sur mesure, de la conception de modules spécifiques à l'intégration d'ERP et gestion de projets clé en main.</p>
                    <a href="{{ url('ingenierie') }}" class="circle-btn"><i class="fa-solid fa-arrow-right-long"></i></a>
                  </div>
                    
                </div>
             
                </div>
            </div>
          </section>