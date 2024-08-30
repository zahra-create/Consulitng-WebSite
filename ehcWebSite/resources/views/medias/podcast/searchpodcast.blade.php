

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>EHC Podcast</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ url('assets/imgs/logo/logoEHC.png') }}">


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
    <link rel="stylesheet" href="{{ url('assets/css/podcasts.css') }}">


   
</head>

<body class="font-heading-hkgrotesk-bold">

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
    <section class="blog-area section-spacing style-1 inner-style-1">
            <div class="container container-large">
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



    <div class="blog-wrapper-area fix" >
                <div class="blog-wrapper" style="display: block;">

                @foreach($podcasts as $podcast)
    
    <div class="container-fluid mb-4">
        <div class="row ">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="text-center">
                    <a href="{{ route('detail-podcast', $podcast) }}" class="text-decoration-none">
                    <h2 class="text-primary font-weight-bold mb-2">
                            {!! str_replace(request()->get('q'), '<mark>'.request()->get('q').'</mark>', $podcast->titre) !!}
                        </h2>
                    </a>
                    <div class="text-justify">
                        <p>{{$podcast->shortBody()}}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
    </div>
           @endforeach

           </div>  
                </div>

                {{ $podcasts->links() }}

<!-- <ul class="pagination style-1 has_fade_anim">
   <li><a href="#">1</a></li>
   <li><a class="current" href="#">2</a></li>
   <li><a href="#">Next <img src="assets/imgs/icon/arrow-next-icon.webp" alt="arrow-icon"></a></li>
 </ul>-->
 </div>
            </div>
          </section> 
 

          <!-- blog area end  -->




          </main>

@include('partials.footer')



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

  <script>    setTimeout(function() {
        var messageElement = document.getElementById('no-results-message');
        if (messageElement) {
            messageElement.style.display = 'none';
        }
    }, 5000); </script>

</body>

</html>