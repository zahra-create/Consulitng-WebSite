@aware(['page'])
@props(['titre','content','button','image'])

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
              <img src="{{ url('assets/imgs/shape/shape-r-1.webp') }}" alt=" ">    <!--Background-->
            </div>
            <!--<div class="banner-wrapper">
                <div class="banner-left"> 
                 <div class="logo"> 
                  <a href="index.html"><img src="{{ url('assets/imgs/logo/logo-vertical.webp') }}" alt="logo"></a> 
                </div> -->
                <!--<div class="social-links">
                  <p class="text has-right-line">Follow Us</p>
                  <ul class="social-icons">
                    <li><a href="#"><i class="icon-wcf-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-wcf-wcf-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-instragram"></i></a></li>
                  </ul>
                </div> 
              </div> -->
              <div class="banner-right" >    <!--style="justify-content: center; padding-left:200px;"-->
                <div class="container container-large">
                  <div class="banner-content-wrapper">
                    <div class="content">
					  <h2 class="title has_fade_anim">{{$titre}}</h2>
                      <div class="cf_text has_fade_anim" data-delay=".35">
						<p class="text" style="font-size:30spx;">{!! $content !!}</p>
                      </div>
                      <div class="btn-wrapper has_fade_anim" data-delay=".5">
                        <a href="{{ route('demande-devis') }}" class="cf_btn wc-btn-primary btn-text-flip"><span
                            data-text="Demander services">{{$button}} </span> <img src="{{ url('assets/imgs/icon/icon-r-21.webp') }}" alt="arrow-icon"></a>
                      </div>
                      <!--<a href="#" class="scroll-up-btn"> <span>Scroll</span> <i class="icon-wcf-arrow-down-1"></i> </a> -->
                    </div> 
                   <div class="thumb-wrapper" style="display: grid;
  grid-template-columns: auto auto; gap: 20px;">
                      <div class="cf_thumb has_fade_anim" data-delay=".65" data-ease="slow(0.7,0.7,false)">
                      <img src="{{ url('assets/imgs/gallery/img-r-3.png')}}  " alt="gallary">
                       
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end intro area -->

  