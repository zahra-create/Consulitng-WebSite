<x-actualite>
          <!-- blog area start  -->
          <section class="blog-area section-spacing style-1 inner-style-1">
            <div class="container container-large">
              <div class="section-heading">
                <div class="section-title-wrapper style-1">
                  <!--<div class="subtitle-wrapper has_fade_anim">
                    <span class="section-subtitle">Binox blog</span>
                  </div> -->
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="color:#005151; font-size: 40px;font-weight:900;">{{ \App\Models\TextWidget::getTitle('Section-title-Actualites')}}</h2>
                  </div>
                </div>
              </div>
              <div class="blog-wrapper-area fix">
                <div class="blog-wrapper">

                @foreach($actualites as $actualite)
                <x-actualite-item :actualite="$actualite"></x-actualite-item>
                @endforeach

                
                </div>

                
<!--Pagination-->
<br>
<br>
{{$actualites->links()}}
               <!-- <ul class="pagination style-1 has_fade_anim">
                  <li><a href="#">1</a></li>
                  <li><a class="current" href="#">2</a></li>
                  <li><a href="#">Next <img src="assets/imgs/icon/arrow-next-icon.webp" alt="arrow-icon"></a></li>
                </ul> -->
              </div>
            </div>
          </section>
          <!-- blog area end  -->
</x-actualite>
