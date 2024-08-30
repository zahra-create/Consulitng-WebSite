<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Stages</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.webp">





  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/icomon.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-blog.css">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-financial.css') }}">

<style>
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
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
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
                    <span style="color:#005151;" class="section-subtitle">{{$Titre}}</span>
                  </div>
                  <div class="title-wrapper has_fade_anim">
                    <h2 style="color:#005151;" class="section-title">{{$SousTitre}}</h2>
                  </div>
                </div>

              </div>
              <div class="blog-wrapper-area fix">
                <div class="blog-wrapper">

                @foreach ($stages as $stage)
                
                  <article class="blog style-1 has_fade_anim" data-delay=".35">
                    <div class="thumb">
                   
                      <a href="{{ route('stages.details' , $stage->id) }}">
                      @if( $stage->image_offre_path )
                        <img src="{{ asset('storage/' . $stage->image_offre_path) }}" alt="blog image">
                        @endif
                      </a>
                      
                    </div>
                    <div class="content">
                      <div class="meta">
                        <a href="blog-style-1.html"><span class="tag">{{ $stage->entreprise }}</span></a>
                        <span class="date has-left-line">{{ $stage->date_debut }} - {{ $stage->date_fin }}</span>
                      </div>
                      <h3 class="title"><a href="{{ route('stages.details' , $stage->id) }}">{{ $stage->title }}</a></h3>
                      <p class="text">{{ $stage->description }}</p>
                    </div>
                  </article>

                @endforeach 
                 
                </div>
                {{ $stages->links() }}
              
              <!--  <ul class="pagination style-1 has_fade_anim">
                  <li><a href="#">1</a></li>
                  <li><a class="current" href="#">2</a></li>
                  <li><a href="#">Next <img src="assets/imgs/icon/arrow-next-icon.webp" alt="arrow-icon"></a></li>
                </ul> -->
              </div>
            </div>
          </section>
          <!-- blog area end  -->

          <!-- cta area start  -->
       @include('partials.disponibility')
          <!-- cta area end  -->

        </main>

        <!-- footer start  -->
      @include('partials.footer')
        <!-- footer end  -->

      </div>
    </div>
  </div>



  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/progressbar.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/backToTop.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/error-handling.js"></script>
  <script src="assets/js/wc-cursor.js"></script>
  <script src="assets/js/offcanvas.js"></script>

</body>

</html>