
<x-podcast>
          <!-- blog area start  -->
          <section class="blog-area section-spacing pin__area">
            <div class="container">
              <div class="blog-area-inner">
                <!--<div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left">
                  <a class="cf_btn wc-btn-underline btn-text-flip newsletter-btn" href="contact.html"><span
                      data-text="Join our newsletter">Join our newsletter</span><i
                      class="fa-solid fa-caret-right"></i></a>
                </div>-->

  <!--              
<div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left"> 
<form class="form-inline d-flex my-2 my-lg-0" method="get" action="{{route('search-podcast')}}">
    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="q" value="{{request()->get('q')}}">
    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
</div>-->

                <div class="blog-main-wrapper">
                  <div class="section-heading section-heading d-flex justify-content-between align-items-center mb-4">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title large" style="color:#005151;">Ecouter Nos Experts</h1>
                      </div>
                    </div>
                    <span style="display:block;">
                    <form class="form-inline d-flex my-2 my-lg-0" method="get" action="{{route('search-podcast')}}">
    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="q" value="{{request()->get('q')}}">
    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
  @if (session('message'))
  <div class="d-flex justify-content-end mt-1 px-3" style="margin-left: auto;">
            <div class="alert alert-info" id="no-results-message" role="alert">
                {{ session('message') }}
            </div>
        </div>
            @endif
</span>
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