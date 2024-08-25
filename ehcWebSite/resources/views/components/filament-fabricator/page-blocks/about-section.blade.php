@aware(['page'])
@props(['content','image'])
<div class="partner-area" id="partnerarea">
            <div class="partner-wrapper">
              <div class="partner-thumb">
                <img src="assets/imgs/gallery/about-div-img.webp" class="partner-logo" alt="partner-image">
                <div class="container">
                  <div class="partner-award-text">
                    <img src="assets/imgs/shape/awards-logo-light.webp" class="has_fade_anim" alt="awards-logo">
                <!--   <p class="text has_fade_anim">Depuis sa création, EHC est reconnue pour offrir des solutions 
                      innovantes et éthiques en ingénierie et services, favorisant un développement organisationnel durable.</p>-->
                      <p class="text has_fade_anim"> {{$content}}  </p>
                 </div>
                </div>
              </div>
            </div>
          </div>
