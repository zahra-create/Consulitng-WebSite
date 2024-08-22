<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Playlist details</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.webp">





  <!-- All CSS files -->

  
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/icomon.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-service-style-1.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-service-style-1.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/playlist_section.css') }}">
  



</head>


<body data-category-id="{{ $category->id }}" class="font-heading-hkgrotesk-bold">

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
  <!--  <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button> 
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button> 
    </div> -->
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
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

  <!-- Header area start -->
 @include('partials.header')
  <!-- Header area end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>



        <main>


          <!-- first section start -->
          <section class="service-area style-1">
            <div class="container container-large">
              <div class="section-top">
                <div>
                  <div class="subtitle-wrapper has_fade_anim">
                    <span style="color:#004E50;"  class="section-subtitle">Détails</span>
                  </div>
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim">
                      <h2 style="color:#004E50;" class="section-title">Human Resources Management</h2>
                    </div>
                  </div>                              
                </div>
                <div class="btn-wrapper has_fade_anim">
                  <p style="color:#4A7172;" class="text">We believe that the human essential to start any successful project and that this is
                  where splendid emotion between the re-generated company.</p>
           <!--       <a href="team-style-1.html" class="wc-btn-underline btn-text-flip"> <span
                      data-text="Get the expert">Get the
                      expert</span> <i class="fa-solid fa-caret-right"></i></a> -->
                </div>
              </div>
            </div>
          </section>
          <!-- first section end -->



           <!-- playlist section start -->
    <main class="containerv">
        <section class="main-video">
            <iframe width="560" height="315" src="{{ $firstVideo->name }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <div class="titlev"><h3>{{ $firstVideo->title }}</h3> </div> 
        </section>
        <section class="video-playlist">
      <!--      <h3 class="titlev"> title of video playlist</h3> -->
            <p>{{ $category->number_of_videos }} lessons &nbsp; . &nbsp; {{ $category->total_duration }}</p>
            <div class="videos">
          
              
        </div>
        </section>
    </main>
           <!-- playlist section end -->

          

         
         
          
        <section  class="client-area section-spacing">
            <div  class="container container-large">
              <div class="client-area-inner">
                <div class="section-heading">
                  <span style="color:#004E50;"  class="justify section-subtitle has_fade_anim" data-fade-from="left">contributeurs</span>
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim">
                      <h2 style="color:#004E50;" class="section-title">Playlist par experts
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="text-wrapper has_fade_anim">
                    <p style="color:#4A7172;" class="text">We believe that the human essential to start any successful project and that this is
                      where splendid emotion between the re-generated company.
                    </p>
                  </div> 
                  <div class="client-logos has_fade_anim">
                    <img  src="assets/imgs/gallery/expert1.jpg" alt="client logo">
                    <img src="assets/imgs/gallery/expert2.jpg" alt="client logo">
                    <img src="assets/imgs/gallery/expert3.png" alt="client logo"> 
                    <img src="assets/imgs/gallery/expert4.jpg" alt="client logo"> 
                  </div>
                </div>
              </div>
            </div>
          </section> 
         
         
        </main>

        <!-- footer start  -->
        @include('partials.footer')
        <!-- footer end  -->

      </div>
    </div>
  </div>



  <!-- All JS files -->
  <script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('assets/js/counter.js') }}"></script>
  <script src="{{ url('assets/js/progressbar.js') }}"></script>
  <script src="{{ url('assets/js/gsap.min.js') }}"></script>
  <script src="{{ url('assets/js/ScrollSmoother.min.js') }}"></script>
  <script src="{{ url('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ url('assets/js/backToTop.js') }}"></script>
  <script src="{{ url('assets/js/main.js') }}"></script>
  <script src="{{ url('assets/js/error-handling.js') }}"></script>
  <script src="{{ url('assets/js/wc-cursor.js') }}"></script>
  <script src="{{ url('assets/js/offcanvas.js') }}"></script>
  <!-- <script src="assets/js/script.js"></script> -->

 <script>
  document.addEventListener('DOMContentLoaded', () => {
    const video_playlist = document.querySelector('.video-playlist .videos');
    const main_video = document.querySelector('.main-video iframe');
    const main_video_title = document.querySelector('.main-video h3');

    // Assume category ID is available, e.g., from a data attribute or variable
    const categoryId = document.querySelector('body').dataset.categoryId;

    // Fetch the JSON data from the server
    fetch(`/category/${categoryId}/videos`)
        .then(response => response.json())
        .then(data => {
          console.log(data);
            if (data.length > 0) {
                // Use a document fragment for better performance
                const fragment = document.createDocumentFragment();

                data.forEach((video, i) => {
                    const videoElement = document.createElement('div');
                    videoElement.classList.add('video');
                    videoElement.dataset.id = video.id;
                    videoElement.innerHTML = `
                        <img src="/assets/imgs/icon/play-button.png" alt="">
                        <p>0${i + 1}. </p>
                        <h3 class="titlev">${video.title}</h3>
                        <p class="time">${video.duration}</p>
                    `;
                    fragment.appendChild(videoElement);
                });

                video_playlist.appendChild(fragment);

                const videos = document.querySelectorAll('.video');
                if (videos.length > 0) {
                    videos[0].classList.add('active');
                    videos[0].querySelector('img').src = "/assets/imgs/icon/pause-button.svg";

                    videos.forEach(selected_video => {
                        selected_video.addEventListener('click', () => {
                            videos.forEach(video => {
                                video.classList.remove('active');
                                video.querySelector('img').src = "/assets/imgs/icon/play-button.png";
                            });

                            selected_video.classList.add('active');
                            selected_video.querySelector('img').src = "/assets/imgs/icon/pause-button.svg";

                            const match_video = data.find(video => video.id == selected_video.dataset.id);
                            if (match_video) {
                                main_video.src = match_video.name;
                                main_video_title.innerHTML = match_video.title;
                            }
                        });
                    });
                }
            } else {
                console.error('No video data found.');
            }
        })
        .catch(error => {
            console.error('Error fetching video data:', error);
        });
});

 </script>
  
</body>

</html>