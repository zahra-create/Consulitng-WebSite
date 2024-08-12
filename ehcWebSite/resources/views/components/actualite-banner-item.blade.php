<div class="swiper-slide" >
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                    <a href="{{route('details-actualites',$actualite)}}"><img src="{{$actualite->getImage()}}" alt="Actualite_Banner"></a>
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                        @foreach($actualite->categories as $category)
                        @endforeach
                          <span class="subtitle has_fade_anim " data-fade-from="right">{{$category->titre}}</span>
                          <div class="title-wrapper has_fade_anim" 
                            data-delay="0.35">
                            <h2 class="title" style=" font-weight:900;"><a href="{{route('details-actualites',$actualite)}}">{{$actualite->titre}}</a></h2>
                          </div>
                          <div class="text">
                            <div class="cf_text has_fade_anim" data-delay=".5" data-fade-from="right">
                              <p class="has-top-line">{{$actualite->getFormatedDate()}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>