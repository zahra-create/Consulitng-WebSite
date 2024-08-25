<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Binox Blog</title>

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
  <link rel="stylesheet" href="{{ url('assets/css/master-blog.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">

  <style>

.nav-link {

transition: all 0.2s;}

.nav-link:hover h5 {
  color: #198754 !important;}

.nav-link:hover{
border-bottom: 2px solid #198754;
}


  .blog {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 500px; /* Set the same width for the whole blog card */
  margin: 0 auto;
}

.thumb {
  width: 100%;
  height: 300px;
  overflow: hidden; /* Hide any overflow */
}

.thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensure the image covers the area properly */
}

.content {
  padding: 10px;
 /* text-align: center; /* Center text */
  width: 100%; /* Ensure content takes up the full width */
}
  

</style>


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

          <!-- blog area start  -->
          <section class="blog-area section-spacing style-1 inner-style-1">
            <div class="container container-large">
              <div class="section-heading">
                <div class="section-title-wrapper style-1">
                  <div class="subtitle-wrapper has_fade_anim">
                    <span class="section-subtitle">EHC blog</span>
                  </div>
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title">Regard sur le journal de Groupe EHC</h2>
                  </div>

                </div>
              </div>
 <nav class="navbar navbar-light bg-light justify-content-between w-100 sticky-top mb-5">
 <div class="container-fluid">
 @foreach($categories as $category) 
<li class="nav-item"> 
<div class="meta">
<a class="nav-link" href="{{route('by-category', $category) }}"><h5 class="tag">{{$category->titre}} ({{$category->total}})</h5></a>
</div></li>
@endforeach
<form class="form-inline d-flex my-2 my-lg-0" method="get" action="{{route('search')}}">
    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="q" value="{{request()->get('q')}}">
    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
  </div>
              @if (session('message'))
  <div class="d-flex justify-content-end mt-1 px-3" style="margin-left: auto;">
            <div class="alert alert-info" id="no-results-message" role="alert">
                {{ session('message') }}
            </div>
        </div>
            @endif

</nav>

              </div>
              <div class="blog-wrapper-area fix">
                <div class="blog-wrapper">

              @foreach($blogs as $blog)
              <x-blog-item :blog="$blog"></x-blog-item>
              @endforeach
           
                </div>
                
                {{ $blogs->links() }}

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

        <!-- footer start  -->
        @include('partials.footer')
        <!-- footer end  -->

      </div>
    </div>
  </div>



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
  <script src="{{ url('assets/js/main.js')}}"></script>
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