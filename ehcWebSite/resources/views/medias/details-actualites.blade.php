<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Binox blog details</title>

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
  <link rel="stylesheet" href="{{ url('assets/css/master-blog-details.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">


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
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

          <!-- blog details area start  -->
          <section class="blog-details-area section-spacing">
            <div class="container">
              <div class="blog-details-area-inner">
                <div class="blog-details-main-wrapper">
                  <div class="section-heading">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title large">{{$actualite->titre}}</h1>
                      </div>
                    </div>
                  </div>
                  <div class="meta has_fade_anim" data-delay=".6">
                    <div class="meta-box">
                      <div class="icon">
                        <img src="assets/imgs/icon/user-green.webp" alt="">
                      </div>
                      <div class="content">
                        <p class="title">Écrit par</p>
                        <p class="title">{{$actualite->Auteur}}</p>
                      </div>
                    </div>
                    <div class="meta-box">
                      <div class="icon">
                        <img src="{{ url('assets/imgs/icon/date-green.webp')}}" alt="">
                      </div>
                      <div class="content">
                        <p class="title">{{$actualite->getFormatedDate()}}</p>
                        <p class="text"></p>
                      </div>
                    </div>
                    <div class="content">
                      <div class="icon">
                        <img src="{{ url('assets/imgs/icon/comment-green.webp')}}" alt="">
                      </div> 
                        <p class="title"><a href="#">
                        @foreach($actualite->categories as $category)
                        @endforeach  
                        {{$category->titre}}</a></p>
                    </div>
                  </div>

                <!--  <div class="thumb-main has_fade_anim" data-delay=".7">
                    <img src="{{$actualite->getImage()}}" alt="blog image">
                  </div>
                  <div class="section-main-content">
                    <div class="social-meta-box has_fade_anim">
                      <div class="meta-item">
                        <img src="{{ url('assets/imgs/icon/view-graph.webp')}}" alt="icon">
                        <p>247</p>
                        <p>Views</p>
                      </div>
                      <div class="meta-item">
                        <img src="{{ url('assets/imgs/icon/share.webp')}}" alt="icon">
                        <p>14</p>
                        <p>Shares</p>
                      </div>
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                      </ul> -->
                      <div class="thumb-main has_fade_anim" data-delay=".7">
                    <img src="{{ $actualite->getImage()}}"alt="blog image">
                  </div>
             
                  <div class="section-main-content">
                    <div class="social-meta-box has_fade_anim">
                      <div class="meta-item">
                        <img src="{{ url('assets/imgs/icon/view-graph.webp')}}" alt="icon">
                        <br>
                        <p>{{ $viewCount }}</p>
                      </div> 
        
@php
    $ip_address = request()->ip(); 
    $userAgent = request()->userAgent();
@endphp


                    <livewire:ActualiteLikes :actualite="$actualite" :ip_address="$ip_address" :user-agent="$userAgent"/>

                    </div>
                    <div class="content-box-wrapper">
                      <div class="content-box">
                        <div class="text-wrapper has_fade_anim">
                          <p class="text"><div>{!! $actualite->corps !!}</div></p>
</div>
             
                      </div>


                    <!-- <div class="comment-box has_fade_anim">
                      <h3 class="title-2" style="color:#3B6668; font-weight:700px;">Newsletter</h3>
                        <div class="text-wrapper">
                          <p class="text">Your email address will not be published. Required fields are marked</p>
                          <p>Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités.</p>
                        </div> 
                        <div class="comment-form-wrapper">
                        <div class="widget-item subscribe-form-item">
          <form action="#" class="subscribe-form">
            <input type="email" placeholder="Enter votre email" style="background-color:#9CB9BA70; ">
            <button type="submit" class="subscribe-btn">
              <i class="icon-wcf-paper-plane" style="color:#3B6668;"></i></button>
          </form>
        </div> 
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>

              </div>
            </div>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  @if($prev) 
    <li class="page-item">
    <a class=" btn btn-outline-success rounded-0 rounded-start" style="--bs-btn-hover-bg: #005151; --bs-btn-hover-border-color: #005151;" href="{{route('details-actualites',$prev)}}">
    Previous</a> 
    @else
    <div class="btn btn-primary no-outline no-hover rounded-0 rounded-start" style="--bs-btn-hover-bg: #005151;">
    Previous</div> 
     </li>@endif
     @if($next)
    <li class="page-item"><a class="btn btn-outline-success rounded-0 rounded-end" href="{{route('details-actualites',$next)}}" style="--bs-btn-hover-bg: #005151; --bs-btn-hover-border-color: #005151;">Next</a></li>
    @else
    <li class="page-item"><div class="btn btn-primary no-outline no-hover rounded-0 rounded-end" style="--bs-btn-hover-bg: #005151; --bs-btn-hover-border-color: #005151;">Next</div></li>
    @endif
  </ul>
</nav>

          </section>
          <!-- blog details area end  -->
 
        </main>
        <!-- footer area start  -->
        @include('partials.footer')
        <!-- footer area end  -->

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



</body>

</html>