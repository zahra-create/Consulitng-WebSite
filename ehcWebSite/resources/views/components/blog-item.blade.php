<article class="blog style-1 has_fade_anim">
                    <div class="thumb">
                      <a href="{{route('blog-details', $blog)}}"><img src="{{$blog->getImage()}}" alt="blog image"></a>
                    </div>
                    <div class="content">
                      <div class="meta">
                        @foreach($blog->categories as $category)
					              <a href="{{route('by-category', $category) }}"><span class="tag">{{$category->titre}}</span></a>
                        @endforeach
                        <span class="date has-left-line">{{$blog->getFormatedDate()}}</span>
                      </div>
                      <h3 class="title"><a href="{{route('blog-details', $blog)}}">{!! $blog->titre !!}</a></h3>
                      <p class="text">{!! $blog->shortBody() !!}</p> 
                      </div>
</article>