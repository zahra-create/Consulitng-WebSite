<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>EHC</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ url('assets/imgs/logo/favicon.webp')}}">


  <!-- All CSS files -->

  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/icomon.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
 <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-financial.css') }}"> 
    <link rel="stylesheet" href="{{ url('assets/css/detail-podcast.css') }}">


</head>


<body class="font-heading-beatricetrial-regular">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="E" class="characters">E</span>
          <span data-text="H" class="characters">H</span>
          <span data-text="C" class="characters">C</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>

  <!-- Scroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>


  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-robot"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="switcher__items">

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->

  <!-- offcanvas start  -->
  @include('partials.menu-bar')
  <!-- offcanvas end  -->

  <!-- search modal start -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form action="#" class="form-search">
            <input type="text" placeholder="Search">
			<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>   <!--Recherche-icon-->
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

  @include('partials.header')

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>



        <main>

          <!-- blog area start  -->
          <section class="blog-area section-spacing pin__area">
            <div class="container" style="margin-top:50px;">
              <div class="blog-area-inner">
			   <div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left" >

       <!--<div class="player" style="height:300px; width:200;">-->
       <div class="wrapper" style=" height:450px; margin:auto; margin-bottom:50px; margin-top:50px; background-color:#00515114; width:380px;">  <!--style="width:250; height:400px; "-->
           <div class="details">
               <div class="now-playing"><p>Présenté par {{$podcast->Proprietaire}}</p></div>
               <!--<div class="track-art>--> <img class="track-art" id="track-art" src="{{$podcast->getImage()}}" alt="podcast"><!-- </div>-->
               <div class="track-name"><h3>{{$podcast->titre}}</h3></div>
               <div class="track-artist"><p>{!! $podcast->description !!}</p></div>
           </div>
		   
       </div>

       <audio id="audio" hidden>
           <source src="" />
       </audio>
   <!-- </div> -->
   </div> 
      
                <div class="blog-main-wrapper">
                  <div class="section-heading">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title large" style="color:#005151;">Écoutez nos experts </h1>
                      </div>
                    </div>
                  </div>
                  <div class="blog-wrapper-area fix has_fade_anim" data-delay=".35">
                    <div class="blog-wrapper">


                  @foreach($podcast->episodes as $index => $episode)
                  <article class="blog style-2" >
                          <div class="content-wrapper">
						               <div class="btn-wrapper"  >
                              <span class="cf_btn wc-btn-icon" id="btn-play" data-episode-id="{{ $episode->id }}" onclick="playpause(this)"><i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i></span> <!--onclick="playpauseTrack()"-->
                            </div>
                            <div class="content">
                              @if($episode->titre)
                              <h2 class="title">{{$episode->titre}}</h2>
                              @else
                              <h2 class="title">Épisode {{ $index + 1 }}: {{$episode->podcaste->titre}}</h2> 
                              @endif
                              @if($episode->description)
                              <p class="text">{!! $episode->description !!}</p>
                              @else
                              <p class="text">{!! $episode->podcaste->description !!}</p>
                              @endif 
                            </div>
                          </div>
                          <audio src="{{ asset('storage/' . $episode->audio) }}" hidden ></audio>
                        </article>

                  @endforeach
 
                    </div>
                  </div>

                  <div class="pagination-links">
                      {{ $episodes->links() }}
                  </div>

                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->


        </main>

        @include('partials.footer')


<script>
let curr_track = null; // Variable globale pour suivre la piste en cours de lecture
let curr_button = null; // Variable globale pour suivre le bouton en cours

let track_art = document.querySelector('.track-art');

function playpause(button) {
    const article = button.closest('article');  // Trouver l'élément article parent
    const audio = article.querySelector('audio');  // Trouver l'élément audio dans cet article

    // Si une autre piste est en cours de lecture, la mettre en pause et réinitialiser son bouton
    if (curr_track && curr_track !== audio) {
        curr_track.pause();
        curr_track.currentTime = 0;  // Réinitialiser l'audio à son début
        if (curr_button) {
            curr_button.querySelector('i').classList.replace('fa-circle-pause', 'fa-circle-play');
        }
    }

    // Si la piste actuelle est en pause, la jouer
    if (audio.paused) {
        audio.play();
        button.querySelector('i').classList.replace('fa-circle-play', 'fa-circle-pause');
        track_art.classList.add('rotate');
        curr_track = audio;  // Mettre à jour la piste actuelle
        curr_button = button;  // Mettre à jour le bouton actuel

        // Ajouter un écouteur d'événement pour remettre le bouton en "play" quand la piste est terminée
        audio.addEventListener('ended', function() {
            button.querySelector('i').classList.replace('fa-circle-pause', 'fa-circle-play');
            track_art.classList.remove('rotate');
            curr_track = null;  // Réinitialiser la piste actuelle
            curr_button = null;  // Réinitialiser le bouton actuel
        }, { once: true });  // L'écouteur sera supprimé après avoir été déclenché une fois
    } else {
        // Si la piste est en lecture, la mettre en pause
        audio.pause();
        button.querySelector('i').classList.replace('fa-circle-pause', 'fa-circle-play');
        track_art.classList.remove('rotate');
        curr_track = null;  // Réinitialiser la piste actuelle
        curr_button = null;  // Réinitialiser le bouton actuel
    }
}



</script>


  <!-- All JS files -->
   
  <script src="{{ url('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ url('assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{ url('assets/js/counter.js')}}"></script>
  <script src="{{ url('assets/js/progressbar.js')}}"></script>
  <script src="{{ url('assets/js/gsap.min.js')}}"></script>
  <script src="{{ url('assets/js/ScrollSmoother.min.js')}}"></script>
  <script src="{{ url('assets/js/ScrollTrigger.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.meanmenu.min.js')}}"></script>
  <script src="{{ url('assets/js/backToTop.js')}}"></script>
  <script src="{{ url('assets/js/man.js')}}"></script>
  <script src="{{ url('assets/js/error-handling.js')}}"></script>
  <script src="{{ url('assets/js/wc-cursor.js')}}"></script>
  <script src="{{ url('assets/js/offcanvas.js')}}"></script>



</body>

</html>