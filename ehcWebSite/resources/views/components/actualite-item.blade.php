<article class="blog style-1 has_fade_anim">
                    <div class="thumb">
                      <a href="{{route('details-actualites' , $actualite)}}"><img src="{{$actualite->getImage()}}" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                        @foreach($actualite->categories as $category)
                        @endforeach
					             <span class="tag">{{$category->titre}}</span>
                        <span class="date has-left-line">{{$actualite->getFormatedDate()}}</span>
                      </div>
                      <h3 class="title"><a href="{{route('details-actualites',$actualite)}}">{{$actualite->titre}}</a></h3>
                      @if( $actualite->afficher_sur_accueil )
                      <div class="btn-wrapper">
                        <a href="{{route('details-actualites',$actualite)}}">Lire Plus</a>
                      </div>
                      @else
                      <p class="text">{!! $actualite->shortBody() !!}</p> 
                      @endif
                      </div>
                  </article>

