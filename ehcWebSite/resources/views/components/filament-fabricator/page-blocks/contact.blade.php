@aware(['page'])
@props(['titre','content','image','titreform','button'])
<section class="contact-intro" >
            <div class="container" >			
              <div class="section-heading">
                <div class="section-title-wrapper">
                 <!-- <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="color: #005151; font-size:73px; font-weight: 700; padding-top: 20px; ">Contactez-nous pour toute information ou assistance.</h2>
                  </div> -->
                </div>
              </div> 
            </div> 
            <div class="location-thumb has_fade_anim" >
              <img src="{{'storage/'.$image}}" alt="contact">
              <div class="container">
                <div class="location-info-wrapper has_fade_anim">
                  <div class="location-info">
                    <div class="logo">
                    <!--<h3 class="title" style="font-size:50px;">Contactez-nous pour toute information ou assistance.</h3> -->
                    </div>
					<h3 class="title" style="color: #005151;">{{ $titre}}</h3> 
         <h3 class="title" style="color: #005151;  font-weight: 800; font-size:30px;">
         {!! $content !!} 
                    </h3> 
                  
                  </div>
                </div>
              </div>
            </div>
					
          </section>
                     
          <section class="contact-area section-spacing">
            <div class="container">
              <div class="contact-area-inner">
                <div class="section-heading">
				 <div class="line-vertical"></div>
                  <div class="section-title-wrapper style-6">
                    <div class="title-wrapper has_fade_anim">
                <h2 class="section-title" style="font-weight: 800; font-size:30px;"  > {{ $titreform }} 
                      </h2> 
                  
                    </div>
                  </div>
                  <div class="line-vertical"></div>
                  <!-- <div class="meta-list has_fade_anim">
                    <ul>
                      <li><a href="mailto:inquiry@binox.com">LiveChat@binox.skype</a></li>
                    </ul>
                  </div> -->
                  <!--<div class="logo has_fade_anim">
                    <a href="#"><img src="assets/imgs/logo/logo.webp" alt="logo"></a>
                  </div> -->
                </div>
                <div class="contact-wrapper has_fade_anim">
                  <form action="/contact/submit" method="POST">
                  @csrf  

					        <div class="wc-single-input">
                      <label for="name" class="wc-form-label">Nom</label>
                      <input type="text" id="name" name="nom" required>
                    </div>
					        <div class="wc-single-input">
                      <label for="name" class="wc-form-label">Prénom</label>
                      <input type="text" id="prenom" name="prenom" required>
                    </div>
                    <div class="wc-single-input">
                      <label for="email" class="wc-form-label">Email</label>
                      <input type="email" id="email" name="email" required>
                    </div>
                    <div class="wc-single-input">
                      <label for="Objet" class="wc-form-label">Objet</label>
                      <input type="text" id="Objet" name="objet" required>
                    </div>
					          <div></div>
                    <div class="wc-single-input">
                      <label for="message" class="wc-form-label">Message</label>
                      <textarea id="message" name="message" placeholder="Écrivez votre message ....." required></textarea>
                    </div>
                    <div class="btn-wrapper">

                  <!--  @if(Session('success'))
                   {{ Session('success') }}
                     @endif -->

                     @if(Session('success'))
                     <div class="alert alert-success alert-dismissible fade in">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session('success') }}
</div>
@endif 
                      <button type="submit" class="wc-btn-primary btn-text-flip"><span data-text="{{ $button }}">{{ $button }}
                      </span> <i class="fa fa-caret-right"></i> </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- contact area end  -->

          <!-- cta area start  -->
          <div class="cta-area style-1">
            <div class="container container-large">
              <div class="cta-area-wrapper">
               <!-- <div class="cta-left">
                  <ul class="cta-info">
                    <li>
                      <h3 class="title">Saturday - Thursday :</h3>
                      <span>8:30 am - 10:45 pm</span>
                    </li>
                  </ul>
                </div>
                <div class="cta-right">
                  <div class="btn-wrapper">
                    <a class="cf_btn wc-btn-underline btn-text-flip" href="blog-style-1.html"><span
                        data-text="Call for an appointment">Call for an appointment</span><img
                        src="assets/imgs/icon/arrow-triangle.webp" alt=""></a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- cta area end  -->


        <!-- contact intro start  -->
          <section class="contact-intro">

            <div class="location-thumb has_fade_anim">
              <img src="assets/imgs/gallery/map.webp" alt="location-image">
              <div class="container">
                <div class="location-info-wrapper has_fade_anim">
                  <div class="location-info">
                  <!--  <div class="logo">
                      <img src="\assets\imgs\logo\logoEHC.png" alt="logo">
                    </div> -->
                    <h3 class="title">{{\App\Models\TextWidget::getTitle('Contact-Info')}}</h3>
                    <!--<ul class="info-list">
                      <li><a href="#">+212 6 63-80-85-01</a></li>
                      <li><a href="#">contact@expertshumancapital.com</a></li>
                    </ul>--> 
                    <ul class="info-list">{!! \App\Models\TextWidget::getContent('Contact-Info') !!}</ul>
                    <!--<p class="text">Rue du Calvon Bv Abdelmoumen- Casablanca</p> -->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- contact intro end  -->