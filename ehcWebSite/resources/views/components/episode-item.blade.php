<article class="blog style-2">
                          <div class="content-wrapper">
						  <div class="btn-wrapper"  >
                              <span class="cf_btn wc-btn-icon" id="btn-play" ><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span> <!--onclick="playpauseTrack()"-->
                            </div>
                            <div class="content">
                                @if($episode->title)
                              <h2 class="title">{{$episode->title}}</h2>
                              @else
                              <h2 class="title">{{$episode->podcaste->titre}}</h2> 
                              @endif
                              @if($episode->description)
                              <p class="text">{{$episode->description}}</p>
                              @else
                              <p class="text">{{$episode->podcaste->description}}</p>
                              @endif 
                            </div>
                          </div>
                        </article>