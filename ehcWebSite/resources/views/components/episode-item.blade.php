<article class="blog style-2" >
                          <div class="content-wrapper">
						  <div class="btn-wrapper"  >
                              <span class="cf_btn wc-btn-icon" id="btn-play" data-episode-id="{{ $episode->id }}" onclick="playpause(this)"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span> <!--onclick="playpauseTrack()"-->
                            </div>
                            <div class="content">
                              @if($episode->titre)
                              <h2 class="title">{{$episode->titre}}</h2>
                              @else
                              <h2 class="title">Épisode {{ $numero }}: {{$episode->podcaste->titre}}</h2> 
                              @endif
                              @if($episode->description)
                              <p class="text">{!! $episode->description !!}</p>
                              @else
                              <p class="text">{!! $episode->podcaste->description !!}</p>
                              @endif 
                            </div>
                          </div>
                          <audio src="{{ $episode->getAudio() }}" hidden ></audio>
                        </article>


