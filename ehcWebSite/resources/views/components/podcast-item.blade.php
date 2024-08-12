<a href="{{route('detail-podcast' , $podcast)}}">
                        <article class="blog style-2">
                          <div class="author">
                            <div class="avatar"><img src="{{$podcast->getImage()}}" alt=""></div>
                            <div class="">
                              <span class="meta-title">Présenté par</span>
                              <span class="name">{{$podcast->Proprietaire}}</span>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="content">
                              <div class="meta">
                              @foreach($podcast->categories as $category)
                                <span class="tag">{{$category->titre}}</span>
                                @endforeach
                                <span class="date has-left-line">{{$podcast->getFormatedDate()}}</span>
                              </div>
                              <h2 class="title">{{$podcast->titre}}</h2>
                              <p class="text">{!! $podcast->shortBody() !!}</p>
                            </div>
                            <div class="btn-wrapper">
                              <span class="cf_btn wc-btn-icon"><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                          </div>
                        </article>
                      </a>