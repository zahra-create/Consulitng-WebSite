
<x-podcast>
          <!-- blog area start  -->
          <section class="blog-area section-spacing pin__area">
            <div class="container">
              <div class="blog-area-inner">
                <div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left">
                  <a class="cf_btn wc-btn-underline btn-text-flip newsletter-btn" href="contact.html"><span
                      data-text="Join our newsletter">Join our newsletter</span><i
                      class="fa-solid fa-caret-right"></i></a>
                </div>
                <div class="blog-main-wrapper">
                  <div class="section-heading">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title large" style="color:#005151;">Ecouter Nos Experts</h1>
                      </div>
                    </div>
                  </div>
                  <div class="blog-wrapper-area fix has_fade_anim" data-delay=".35">
                    <div class="blog-wrapper">
  

                    @foreach($podcasts as $podcast)
                    <x-podcast-item :podcast="$podcast"></x-podcast-item>
                    @endforeach

                </div>
                
                  {{$podcasts->links()}}

                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->
</x-podcast>