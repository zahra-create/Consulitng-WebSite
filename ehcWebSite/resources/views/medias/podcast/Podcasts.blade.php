
<x-podcast>
          <!-- blog area start  -->
          <section class="blog-area section-spacing pin__area">
            <div class="container" >   <!--style="margin-top:100px;"-->
              <div class="blog-area-inner">
		   <div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left" style="margin-top:80px; width:70%; margin-bottom:50px;" >   <!--style="width:350px;"-->
          <div class="header">
            <h3 class="title-2" style=" color:#005151;">Newsletter</h3>  <!--margin-bottom:10px;-->
            <p>Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités.</p>
          </div>
          <form action="#" class="subscribe-form" style=" border-radius:10px; background-color: #00515130; ">   <!--margin-top:40px;-->
            <input type="email" placeholder="Entrer votre email">
            <button type="submit" class="subscribe-btn">
              <i class="icon-wcf-paper-plane" style="color:rgb(85, 85, 85); font-size:20px;"></i></button>
          </form>
                </div>
                <div class="blog-main-wrapper" >  <!--style="margin-top:50px;"-->
                  <div class="section-heading" style="margin-top:10px;">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title large" style="color:#005151;">Écoutez nos experts </h1>
                      </div>
                    </div>
                  </div>
                  <div class="blog-wrapper-area fix has_fade_anim" data-delay=".35">
                    <div class="blog-wrapper">

                    @foreach($podcasts as $podcast)
                    <x-podcast-item :podcast="$podcast"></x-podcast-item>
                    @endforeach

                </div>
                  <ul class="pagination style-1 has_fade_anim">
                    <li><a href="{{ route('Podcasts') }}">1</a></li>
                    <li><a class="current" href="{{ route('Page2') }}">2</a></li>
                    <li><a href="{{ route('Page2') }}">Next <img src="assets/imgs/icon/arrow-next-icon.webp" alt="arrow-icon"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->
</x-podcast>