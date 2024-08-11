<article class="blog style-1 has_fade_anim">
                    <div class="thumb">
                      <a href="{{route('details-actualites' , $actualite)}}"><img src="{{$actualite->getImage()}}" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                        @foreach($actualite->categories as $category)
                        @endforeach
					   <a href="#"><span class="tag">{{$category->titre}}</span></a>
                        <span class="date has-left-line">{{$actualite->getFormatedDate()}}</span>
                      </div>
                      <h3 class="title"><a href="{{route('details-actualites',$actualite)}}">{{$actualite->titre}}</a></h3>
                      <p class="text">{{$actualite->shortBody()}}</p> 
                    </div>
                  </article>