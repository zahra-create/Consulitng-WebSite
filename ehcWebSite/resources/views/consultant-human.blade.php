
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">


  <title>EHC</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ url('assets/imgs/logo/logoEHC.png') }}">


  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/icomon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master-financial.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master-service-style-1.css') }}">
   


<style>
 .area-thumb{
  width: 100%;
  height: 800px;
  overflow: hidden;
}

.area-thumb img{
  width: 100%;
  height: 100%;
  object-fit: cover; 
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


.brand-logo{
  width: 100%;
  height: 50px;
  overflow: hidden; /* Hide any overflow */
}

.brand-logo img{
  width: 100%;
  height: 100%;
  object-fit: cover;

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

  @include('partials.header')
  

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper consultant-human">

        <main>

          <!-- start intro area -->
          <section class="banner-area banner-9">
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="intro-shape-1">
              <img src="{{ url('assets/imgs/shape/shape-r-1.webp') }}" alt=" ">    <!--Background-->
            </div>
            <!--<div class="banner-wrapper">
                <div class="banner-left"> 
                 <div class="logo"> 
                  <a href="index.html"><img src="{{ url('assets/imgs/logo/logo-vertical.webp') }}" alt="logo"></a> 
                </div> -->
                <!--<div class="social-links">
                  <p class="text has-right-line">Follow Us</p>
                  <ul class="social-icons">
                    <li><a href="#"><i class="icon-wcf-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-wcf-wcf-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-wcf-instragram"></i></a></li>
                  </ul>
                </div> 
              </div> -->
              <div class="banner-right" >    <!--style="justify-content: center; padding-left:200px;"-->
                <div class="container container-large">
                  <div class="banner-content-wrapper">
                    <div class="content">
					<!--  <h2 class="title has_fade_anim">Bienvenue chez EHC groupe</h2>-->
          <h2 class="title has_fade_anim">{{$TitreHeader}}</h2>
                      <div class="cf_text has_fade_anim" data-delay=".35">
						<!--<p class="text" style="font-size:30spx;">Votre Partenaire pour le Succès en Ressources Humaines.</p>-->
            <p class="text" style="font-size:30spx;">{!! $ContentHeader !!}</p>           
          </div>
                <!--      <div class="btn-wrapper has_fade_anim" data-delay=".5">
                       <a href="{{ route('demande-devis') }}" class="cf_btn wc-btn-primary btn-text-flip" style="background-color: {{$ColorButtonHeader}}; "><span
                            data-text="Demander services">{{$ButtonHeader}}</span> <img src="{{ url('assets/imgs/icon/icon-r-21.webp') }}" alt="arrow-icon"></a> 
                
                      </div> -->

  <div class="btn-wrapper has_fade_anim dropdown show" data-delay=".5">
  <a href="#" class="cf_btn wc-btn-primary btn-text-flip dropdown-toggle " style="background-color: {{$ColorButtonHeader}}; " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span data-text="Demander services">{{$ButtonHeader}}</span> 
   <!-- <img src="{{ url('assets/imgs/icon/icon-r-21.webp') }}" alt="arrow-icon"> -->
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
    <a class="dropdown-item" href="{{ route('service-entreprise') }}">Services Entreprises</a>
    <a class="dropdown-item" href="{{ route('service-salarie') }}">Services Salariés</a>
    <a class="dropdown-item" href="{{ route('service-etudiant') }}">Services Etudiants</a>
  </div>
</div>
   
                      <!--<a href="#" class="scroll-up-btn"> <span>Scroll</span> <i class="icon-wcf-arrow-down-1"></i> </a> -->
                    </div> 
                   <div class="thumb-wrapper" style="display: grid;
  grid-template-columns: auto auto; gap: 20px;">
                      <div class="cf_thumb has_fade_anim" data-delay=".65" data-ease="slow(0.7,0.7,false)">
                      <img src="{{ '/storage/'. $ImageHeader }}" alt="gallary">
                       
                      </div> 
                 


@php
$bannerHeader = $Header->where('Type', 'Banner');
$sidebarHeader = $Header->where('Type', 'Sidebar');
$videoHeader = $Header->where('Type', 'Video');
$annonceHeader = $Header->where('Type', 'Annoce');
$cardsHeader = $Header->where('Type', 'Cards');
@endphp

@if($bannerHeader->isNotEmpty())
    @foreach($bannerHeader as $banner)
    <section class="py-6">
  <div class="container">
  @if(empty($banner->background))
	 <div class="position-relative pt-8 px-8 bg-secondary rounded-3">
	  @else
    <div class="position-relative pt-8 px-8 rounded-3" style="background-color: {{$banner->background}}; ">
      @endif
	  <button class="btn position-absolute top-0 end-0 me-4 mt-4">
        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.5 11.5C14.3284 11.5 15 10.8284 15 10C15 9.17157 14.3284 8.5 13.5 8.5C12.6716 8.5 12 9.17157 12 10C12 10.8284 12.6716 11.5 13.5 11.5Z" fill="white"></path>
          <path d="M6.5 11.5C7.32843 11.5 8 10.8284 8 10C8 9.17157 7.32843 8.5 6.5 8.5C5.67157 8.5 5 9.17157 5 10C5 10.8284 5.67157 11.5 6.5 11.5Z" fill="white"></path>
        </svg>
      </button>
      <div class="row">
        <div class="col-12 col-lg-6 pb-8 d-flex flex-column align-items-center justify-content-center text-center ">
          <h6 class="mb-4 text-white">{!! $banner->Titre !!}</h6>
          <p class="mw-md mb-8 mb-lg-24 text-light">{!! $banner->SousTitre !!}</p>
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" style="background-color: {{ $banner->button_color }}; border-color: {{ $banner->button_color }}; " href="{{$banner->link}}">
              <span class="me-2">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.50015 1.5H11.5002C11.6328 1.5 11.7599 1.55268 11.8537 1.64645C11.9475 1.74021 12.0002 1.86739 12.0002 2V4.83333C12.0002 4.94152 11.9651 5.04679 11.9002 5.13333L10.6002 6.86667C10.5352 6.95321 10.5002 7.05848 10.5002 7.16667V14C10.5002 14.1326 10.4475 14.2598 10.3537 14.3536C10.2599 14.4473 10.1328 14.5 10.0002 14.5H6.00015C5.86754 14.5 5.74037 14.4473 5.6466 14.3536C5.55283 14.2598 5.50015 14.1326 5.50015 14V7.16667C5.50015 7.05848 5.46506 6.95321 5.40015 6.86667L4.10015 5.13333C4.03524 5.04679 4.00015 4.94152 4.00015 4.83333V2C4.00015 1.86739 4.05283 1.74021 4.1466 1.64645C4.24037 1.55268 4.36754 1.5 4.50015 1.5V1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M8.00015 7.5V9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M4.00015 4H12.0002" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg> 
               
              </span>
              <span>{!! $banner->Boutton !!}</span>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-end h-100">
          <img class="img-fluid mw-lg-md" src="{{ $banner->getImage() }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@if($sidebarHeader->isNotEmpty())
@foreach($sidebarHeader as $sidebar)
<div class="card " style="width: 18rem;">
  <img src="{{$sidebar->getImage()}}" href="{{$sidebar->link}}" class="card-img-top" alt="pub" style="width: 100%; height: 80%;">
  <div class="card-body align-items-center justify-content-center text-center">
  <h4 class="card-text">{!!$sidebar->Titre !!}</h4>
    <p class="card-text">{!! $sidebar->description !!}</p>
    <a href="{{$sidebar->link}}" class="btn btn-primary" style="background-color: {{ $sidebar->button_color }}; border-color: {{ $sidebar->button_color }}; ">{{$sidebar->Boutton}}</a>
  </div>
</div> 
@endforeach
@endif

@if($videoHeader->isNotEmpty())
@foreach($videoHeader as $video)
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="{{ $video->link }}" allowfullscreen></iframe>
</div>

@endforeach
@endif

@if($annonceHeader->isNotEmpty())
@foreach($annonceHeader as $annonce)
<section class="py-6">
  <div class="container">
    <div class="position-relative pt-8 px-8 rounded-3" style="background-color: {{ $annonce->background }}; ">
 
      <div class="row ">
        <div class="col-12 col-lg-12 pb-8 px-5 d-flex flex-column align-items-center justify-content-center ">
          <h2 class="display-5 mb-4 text-warning">
            <span>{!! $annonce->Titre !!}</span>
            <span class="text-white ">{!! $annonce->SousTitre !!}</span>
          </h2>
          <p class="mw-md mb-8 mb-lg-24 text-light">{!! $annonce->description !!}</p>
          @if(!empty($annonce->Boutton))
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" style="background-color: {{ $annonce->button_color }}; border-color: {{ $annonce->button_color }}; " href="{{ $annonce->link }}">
              <span>{!! $annonce->Boutton !!}</span>
            </a>
          </div>
          @endif
        </div>
        <div class="col-12 col-lg-8 d-flex align-items h-100">
          <img class="img-fluid mw-lg-md" src="{{ $annonce->getImage() }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@if($cardsHeader->isNotEmpty())
<section class="py-20">
  <div class="container">
    <div class="row">
    @foreach($cardsHeader as $card)
      <div class="col-12 col-lg-12 mb-6 mb-lg-0 ">
        <div class="h-100" style="background-image: url('{{$card->getImage()}}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
          <div class="ps-8 pe-8 pe-lg-0 ps-lg-24 pt-24 pb-52 mw-md">
          <h2 class="mb-4 h6">{{$card->Titre}}</h2>
            <span class="mt-6 mb-12">{!!$card->description!!}</span>
            <a class="btn btn-primary" href="{{$card->link}}" style="background-color: {{ $card->button_color }}; border-color: {{ $card->button_color }}; ">{{$card->Boutton}}</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif


  

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end intro area -->

          <!-- about area start  -->

          <section id="triggeredSection" class="about-area section-spacing" >
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="area-shape-1" src="{{ url('assets/imgs/shape/x-shape-5.webp') }}" alt="shape">
            <div class="container">
              <div class="about-area-inner">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper has_fade_anim" >
                      <h2 class="section-title" style="color:rgb(0, 81, 81);" >
                      {!! $TitreAbout !!}</h2>
                    </div>
                  </div>
                  <div class="thumb-wrapper has_fade_anim" data-fade-from="left">
                    <div class="react-shape"  style="background-color:rgb(0, 81, 81);">
                      <span class="text" > </span>
                    </div>
                    <div class="react-thumb">
                      <img src="{{ '/storage/'. $ImageAbout}}" alt="about-image">
                    </div>
                  </div>
                  <div class="text-wrapper has_fade_anim">
				<!--	  <p class="text">Chez EHC, nous sommes dedies à transformer la gestion des ressources humaines en un atout strategique pour votre entreprise.</p>
             <p class="text">Avec une equipe d'experts en RH, nous offrons des solutions sur mesure pour optimiser vos processus et attirer les meilleurs talents.</p> -->
             <p class="text">{!! $Paragraph1About !!}</p>
             <p class="text">{!! $Paragraph2About !!}</p>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="{{ route('about')}}" class="wc-btn-primary btn-text-flip" style="background-color:{{$ColorButtonAbout}}; border:{{$ColorButtonAbout}};" > <span data-text="{{ $ButtonAbout }}" >{{ $ButtonAbout }}
                     </span> <img src="{{ url('assets/imgs/icon/icon-r-21.webp') }}" alt="arrow-icon"></a>
                  </div>
                </div>

                <div class="area-thumb">
              <img src="{{ '/storage/'. $ImageHeroAbout}}" alt="hero image">
            </div>

              </div>

            </div>
         <!--   <div class="area-thumb">
              <img src="{{ '/storage/'. $ImageHeroAbout}}" alt="hero image">
            </div> -->
          </section>
          <!-- about area end  -->
		  
		  <!-- Valeurs et engagements start  -->
       
          <section class="service-area style-6 section-spacing line-area" style="padding-top:90px;" >       <!--style="padding-top:90px;">-->
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div> 
                </div> 
              </div>
            </div>
            <div class="container" >
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="font-size: 60px; color:rgb(0, 81, 81); "><span>{!! $TitreWHYEHC !!}</span></h2>
                  </div>
            	<div class="subtitle-wrapper has_fade_anim" data-delay=".35" >
				  <!--<p style="font-size: 25px; ">Au coeur de ses valeurs, EHC place la satisfaction de ses partenaires au sommet de ses priorites</p>-->
          <p style="font-size: 25px; ">{!! $IntroWHYEHC !!}</p>
        </div>
                </div>
              </div>
              
              <div class="feature-wrapper" >
@if($valeurs->isEmpty())
	 <div class="wcf_iconbox style-8 has_fade_anim">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-33.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">ENGAGEMENT</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".35">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-34.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">AGILITE</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".5">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-35.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">EXPERTISE</a></h4>
                    </div>
                  </div>
                </div>
                <div class="wcf_iconbox style-8 has_fade_anim" data-delay=".65">
                  <div class="thumb">
                    <div class="cf_image">
                      <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-36.webp') }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">INNOVATION & EXCELLENCE</h4>
                    </div>
                  </div>
                </div>
@else				
@foreach($valeurs as $valeur)
<div class="wcf_iconbox style-8 has_fade_anim">
                  <div class="thumb">
                    <div class="cf_image">
                     <!-- <a href="service-details.html"><img src="{{ url('assets/imgs/gallery/img-r-33.webp') }}"
                          alt="feature image"></a> -->
                         <a href="service-details.html"><img src="{{ '/storage/'.$valeur->ImageValeur }}"
                          alt="feature image"></a>
                    </div>
                  </div>
                  <div class="content">
                    <div class="cf_title">
                      <h4 class="title" style="color:rgb(0, 81, 81);">{{$valeur->Valeur}}</a></h4>
                    </div>
                  </div>
                </div>
@endforeach
              
@endif				
              </div>
            </div>
          </section>
   
          

<!-- Valeurs et engagements end  -->

<!-- BU start -->

<div class="section-title-wrapper style-2">
				   		<div class="title-wrapper" style="text-align: center;">
                        <h2 class="section-title" style="text-decoration-line: none; color: rgb(0, 81, 81);">NOS BUSINESS UNITS</h2>
                      </div>
                    </div>
           <section class="services-area section-spacing pin__area">
            <div class="container container-large">
              <div class="services-area-inner">
                <div id="pinElement" class="section-heading pin__element">
                  <div class="thumb has_fade_anim">
                    <div class="btn-wrapper pos-center btn-move">
                   <!--   <a class="cf_btn wc-btn-play light btn-item video-popup" href="{{ $lienVideo }}"> -->
                     <!--   <i class="fa-solid fa-play"></i> -->
                      </a>
                    </div>
                    <img src="{{ asset('/storage/' .$ImageBU) }}" alt="image">
                  </div>
                  <div class="content has_fade_anim">


                    <div class="">

                      <div class="btn-wrapper" style="margin-bottom:20px;">
                  <a href="{{ route('demande-devis') }}" class="cf_btn wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);"><span data-text="Demander services">Demander services</span> <img src="assets/imgs/icon/icon-r-21.webp" alt="arrow-icon"> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="services-wrapper">

@php
    $counter = 1;
@endphp               
@foreach($bus as $bu)  
<div class="has_fade_anim">
              
                      <div class="service-item " >
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">{{ str_pad($counter, 2, '0', STR_PAD_LEFT) }}</span>
                        <div class="content-wrapper">
                          <div class="content" style="width:100vw;" >
                            <h3 class="title" style="font-weight:600;color:rgb(0, 81, 81);" data-text="{{$bu->BU}}">{{$bu->BU}}</h3>
                            <p class="text" >{{$bu->DescriptionBU}}</p>
                          </div>
                          <div class="btn-wrapper">
                           <!-- <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span> -->
                          </div>
                        </div>
                      </div>
              <!--      </a> -->
                  </div>

   @php
    $counter++;
@endphp
@endforeach

            <!--      <div class="has_fade_anim">
                   
                      <div class="service-item " >
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">01</span>
                        <div class="content-wrapper">
                          <div class="content" style="width:100vw;" >
                            <h3 class="title" style="font-weight:600;color:rgb(0, 81, 81);" data-text="EHC Consulting">EHC Consulting</h3>
                            <p class="text" >Votre partenaire stratégique pour une transformation intégrale et performance optimale, alliant expertise en management des organisation digitalisation.</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="has_fade_anim">
                  
                      <div class="service-item">
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">02</span>
                        <div class="content-wrapper">
                          <div class="content">
                            <h3 class="title" data-text="EHC Recruitment" style="font-weight:600;color:rgb(0, 81, 81);">EHC Recruitment</h3>
                            <p class="text">Une BU dédiée pour recruter avec succès tout type de profil, avec des services sur mesure et un accompagnement intégral .</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                 
                    <a href="service-details.html">
                      <div class="service-item">
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">03</span>
                        <div class="content-wrapper">
                          <div class="content">
                            <h3 class="title" data-text="EHC Learning" style="font-weight:600;color:rgb(0, 81, 81);">EHC Learning</h3>
                            <p class="text">Spécialisée en formation sur mesure, de l'ingénierie à l'e-learning, avec un soutien complet pour maximiser vos investissements en matière de formation.</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="has_fade_anim">
                   
                      <div class="service-item">
                        <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">04</span>
                        <div class="content-wrapper">
                          <div class="content">
                            <h3 class="title" data-text="EHC Services & Events" style="font-weight:600;color:rgb(0, 81, 81);">EHC Services & Events</h3>
                            <p class="text">Votre solution tout-en-un en matière de service et d'évènementiel.</p>
                          </div>
                          <div class="btn-wrapper">
                            <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="has_fade_anim" >
				  
                    <div class="service-item">
                      <span class="number" style="font-weight:700;color:rgb(0, 81, 81); font-size:30px;">05</span>
                      <div class="content-wrapper">
                        <div class="content">
                          <h3 class="title" data-text="EHC Engineering" style="font-weight:600;color:rgb(0, 81, 81);">EHC Engineering</h3>
                          <p class="text">Votre partenaire pour des solutions informatiques sur mesure, de la conception de module spécifique à la mise en place d'ERP intégrés.</p>
                        </div>
                        <div class="btn-wrapper">
                          <span class="cf_btn wc-btn-normal"><i class="fa-solid fa-caret-right"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div> -->
                </div>
              </div>
            </div>
          </section> 
		  
          <!-- BU end  -->
<!--Start espace pub after BU-->
@php
$bannerAfterBU = $AfterBU->where('Type', 'Banner');
$sidebarAfterBU = $AfterBU->where('Type', 'Sidebar');
$videoAfterBU = $AfterBU->where('Type', 'Video');
$annonceAfterBU = $AfterBU->where('Type', 'Annonce');
$cardsAfterBU = $AfterBU->where('Type', 'Cards');
@endphp


@if($bannerAfterBU->isNotEmpty())
@foreach($bannerAfterBU as $banner)
<section class="py-6">
  <div class="container">
    @if(empty($bannerAfterBU->background))
	 <div class="position-relative pt-8 px-8 bg-secondary rounded-3">
	  @else
    <div class="position-relative pt-8 px-8 rounded-3" style="background-color:{{$banner->background}};">
      @endif

      <button class="btn position-absolute top-0 end-0 me-4 mt-4">
        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.5 11.5C14.3284 11.5 15 10.8284 15 10C15 9.17157 14.3284 8.5 13.5 8.5C12.6716 8.5 12 9.17157 12 10C12 10.8284 12.6716 11.5 13.5 11.5Z" fill="white"></path>
          <path d="M6.5 11.5C7.32843 11.5 8 10.8284 8 10C8 9.17157 7.32843 8.5 6.5 8.5C5.67157 8.5 5 9.17157 5 10C5 10.8284 5.67157 11.5 6.5 11.5Z" fill="white"></path>
        </svg>
      </button>
      <div class="row">
        <div class="col-12 col-lg-6 pb-8 d-flex flex-column align-items-center justify-content-center text-center ">
          <h6 class="mb-4 text-white">{{ $banner->Titre }}</h6>
          <p class="mw-md mb-8 mb-lg-24 text-light">{{ $banner->SousTitre }}</p>
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" href="{{ $banner->link }}" style="background-color: {{ $banner->button_color }}; border-color: {{ $banner->button_color }}; ">
              <span class="me-2">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.50015 1.5H11.5002C11.6328 1.5 11.7599 1.55268 11.8537 1.64645C11.9475 1.74021 12.0002 1.86739 12.0002 2V4.83333C12.0002 4.94152 11.9651 5.04679 11.9002 5.13333L10.6002 6.86667C10.5352 6.95321 10.5002 7.05848 10.5002 7.16667V14C10.5002 14.1326 10.4475 14.2598 10.3537 14.3536C10.2599 14.4473 10.1328 14.5 10.0002 14.5H6.00015C5.86754 14.5 5.74037 14.4473 5.6466 14.3536C5.55283 14.2598 5.50015 14.1326 5.50015 14V7.16667C5.50015 7.05848 5.46506 6.95321 5.40015 6.86667L4.10015 5.13333C4.03524 5.04679 4.00015 4.94152 4.00015 4.83333V2C4.00015 1.86739 4.05283 1.74021 4.1466 1.64645C4.24037 1.55268 4.36754 1.5 4.50015 1.5V1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M8.00015 7.5V9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M4.00015 4H12.0002" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg> 
               
              </span>
              <span>{{ $banner->Boutton }}</span>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-end h-100">
          <img class="img-fluid mw-lg-md" src="{{ $banner->getImage() }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

<section class="d-flex mx-4">
@if($sidebarAfterBU->isNotEmpty())
@foreach($sidebarAfterBU as $sidebar)
<div class="card" style="width: 18rem;">
  <img src="{{$sidebar->getImage()}}" href="{{$sidebar->link}}" class="card-img-top" alt="pub" style="width: 100%; height: 80%;">
  <div class="card-body">
    <p class="card-text">{!! $sidebar->description !!}</p>
    <a href="{{$sidebar->link}}" class="btn btn-primary" style="background-color: {{ $sidebar->button_color }}; border-color: {{ $sidebar->button_color }}; " >{{$sidebar->Titre}}</a>
  </div>
</div> 
@endforeach
@endif
</section>

@if($videoAfterBU->isNotEmpty())
@foreach($videoAfterBU as $video)
<div class="container-fluid px-0">
<div class="embed-responsive embed-responsive-16by9" >
  <iframe class="embed-responsive-item" src="{{ $video->link }}" style="width: 100%; height:70vh;" allowfullscreen></iframe>
</div>
</div>
@endforeach
@endif

@if($annonceAfterBU->isNotEmpty())
@foreach($annonceAfterBU as $annonce)

<section class="py-6">
  <div class="container">
    <div class="position-relative pt-8 px-8 bg-primary rounded-3">
      <div class="row">
        <div class="col-12 col-lg-6 pb-8 d-flex flex-column">
          <h2 class="display-5 mb-4 text-warning">
            <span>{{$annonce->Titre}}</span>
            <span class="text-white">{{$annonce->SousTitre}}</span>
          </h2>
          <p class="mw-md mb-8 mb-lg-24 text-light">{{$annonce->description}}</p>
          @if(!empty($annonce->Boutton))
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" href="{{ $annonce->link }}" style="background-color: {{ $annonce->button_color }}; border-color: {{ $annonce->button_color }}; ">
              <span>{{$annonce->Boutton}}</span>
            </a>
          </div>
          @endif
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-end h-100">
          <img class="img-fluid mw-lg-md" src="{{$annonce->getImage()}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@if($cardsAfterBU->isNotEmpty())  
<section class="py-20">
  <div class="container">
    <div class="row">
    @foreach($cardsAfterBU as $card)

      <div class="col-12 col-lg-6 mb-6 mb-lg-0">
        <div class="h-100" style="background-image: url('{{$card->getImage()}}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
          <div class="ps-8 pe-8 pe-lg-0 ps-lg-24 pt-24 pb-52 mw-md">
            <span class="mb-4 h6 px-4">{{$card->description}} </span>
            <h2 class="mt-6 mb-12 px-4">{{$card->Titre}}</h2>
            <a class="btn btn-primary" href="{{$card->link}}" style="background-color: {{ $card->button_color }}; border-color: {{ $card->button_color }}; ">{{$card->Boutton}}</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

		  
<!--End espace pub after BU-->

		<!-- EHC Chiffres start  --> 

          <section class="counter-area" style="margin-top:0px; padding-top:100px;">
		            <div class="container" >
            <div class="counter-thumb">
              <img src="{{ '/storage/'. $ImageChiffres}}" alt="counter-thumb" >
            </div>
          </div>
            <div class="shape-1">
              <img src="{{ url('assets/imgs/shape/x-shape-3.webp') }}" alt="shape">
            </div>
            <div class="container">
              <div class="counter-item-wrapper">
                <div class="counter-item has_fade_anim" data-fade-from="left" >
                  <h2 class="title" style="color: #005151; padding-right:35px; font-size:40px; font-weight: 700;">{{$TitreChiffres}}</h2>  <!-- padding-top:20px; padding-right:35px; font-size:40px; font-weight: 700;-->
                </div>
                <div class="team-item" >   <!--style="padding-top:100px;"-->
                  <div class="cf_text has_fade_anim" >   <!--style="width:300px; margin-right:15px;"-->
                   <!-- <p class="text" style="color: black; font-size: 18px">EHC mobilise pour vous une équipe de haut dirigeants et cadres exerçant dans les sphères des secteurs public et privé et ayant en moyenne plus de 20 ans d'expérience dans leurs domaines de compétence.</p>-->
                   <p class="text" style="color: black; font-size: 18px">{!! $TexteChiffres !!}</p>
                  </div>
				<div class="btn-wrapper" style="margin-top:50px; margin-right:15px;"  >
                      <a href="{{ route('about')}}" class="cf_btn wc-btn-primary btn-text-flip" style="background-color:rgb(0, 81, 81); border:rgb(0, 81, 81);"><span
                          data-text="{{$ButtonChiffres}}">{{$ButtonChiffres}}</span> <img src="{{ url('assets/imgs/icon/icon-r-21.webp') }}" alt="arrow-icon"></a>
                    </div>
                </div>
                <div class="counter-text has_fade_anim">
                  <ul class="counter-list">
@foreach($chiffres as $chiffre)
<li class="item">
       <h2 class="section-title wc-counter">{{$chiffre->Chiffre}}</h2>
        <p class="text">{{$chiffre->descriptionChiffre}}</p>
        </li>
@endforeach

                   <!-- <li class="item">
                      <h2 class="section-title wc-counter">3.8x</h2>
                      <p class="text">Economical growth</p>
                    </li>
                    <li class="item">
                      <h2 class="section-title wc-counter">20+</h2>
                      <p class="text">Années d'experiences</p>
                    </li>
                    <li class="item">
                      <h2 class="section-title wc-counter">1.2m</h2>
                      <p class="text">Clients Around the world</p>
                    </li>
                    <li class="item">
                      <h2 class="section-title wc-counter">70+</h2>
                      <p class="text">Team Members</p>
                    </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!-- EHC Chiffres end  -->

<!--Start espace pub before Actu-->
@php
$bannerBeforeActu = $BeforeActu->where('Type', 'Banner');
$sidebarBeforeActu = $BeforeActu->where('Type', 'Sidebar');
$videoBeforeActu = $BeforeActu->where('Type', 'Video');
$annonceBeforeActu = $BeforeActu->where('Type', 'Annonce');
$cardsBeforeActu = $BeforeActu->where('Type', 'Cards');
@endphp


@if($bannerBeforeActu->isNotEmpty())
@foreach($bannerBeforeActu as $banner)
<section class="py-6">
  <div class="container">
  @if(empty($bannerBeforeActu->background))
	 <div class="position-relative pt-8 px-8 bg-secondary rounded-3">
	  @else
    <div class="position-relative pt-8 px-8 rounded-3" style="background-color:{{$banner->background}};">
      @endif
      <button class="btn position-absolute top-0 end-0 me-4 mt-4">
        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.5 11.5C14.3284 11.5 15 10.8284 15 10C15 9.17157 14.3284 8.5 13.5 8.5C12.6716 8.5 12 9.17157 12 10C12 10.8284 12.6716 11.5 13.5 11.5Z" fill="white"></path>
          <path d="M6.5 11.5C7.32843 11.5 8 10.8284 8 10C8 9.17157 7.32843 8.5 6.5 8.5C5.67157 8.5 5 9.17157 5 10C5 10.8284 5.67157 11.5 6.5 11.5Z" fill="white"></path>
        </svg>
      </button>
      <div class="row">
        <div class="col-12 col-lg-6 pb-8 d-flex flex-column align-items-center justify-content-center text-center ">
          <h6 class="mb-4 text-white">{{ $banner->Titre }}</h6>
          <p class="mw-md mb-8 mb-lg-24 text-light">{{ $banner->SousTitre }}</p>
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" href="{{$banner->link}}" style="background-color: {{ $banner->button_color }}; border-color: {{ $banner->button_color }}; ">
              <span class="me-2">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.50015 1.5H11.5002C11.6328 1.5 11.7599 1.55268 11.8537 1.64645C11.9475 1.74021 12.0002 1.86739 12.0002 2V4.83333C12.0002 4.94152 11.9651 5.04679 11.9002 5.13333L10.6002 6.86667C10.5352 6.95321 10.5002 7.05848 10.5002 7.16667V14C10.5002 14.1326 10.4475 14.2598 10.3537 14.3536C10.2599 14.4473 10.1328 14.5 10.0002 14.5H6.00015C5.86754 14.5 5.74037 14.4473 5.6466 14.3536C5.55283 14.2598 5.50015 14.1326 5.50015 14V7.16667C5.50015 7.05848 5.46506 6.95321 5.40015 6.86667L4.10015 5.13333C4.03524 5.04679 4.00015 4.94152 4.00015 4.83333V2C4.00015 1.86739 4.05283 1.74021 4.1466 1.64645C4.24037 1.55268 4.36754 1.5 4.50015 1.5V1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M8.00015 7.5V9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M4.00015 4H12.0002" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg> 
               
              </span>
              <span>{{ $banner->Boutton }}</span>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-end h-100">
          <img class="img-fluid mw-lg-md" src="{{ $banner->getImage() }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif


<section class="d-flex mx-4">
@if($sidebarBeforeActu->isNotEmpty())
@foreach($sidebarBeforeActu as $sidebar)
<div class="card" style="width: 18rem;">
  <img src="{{$sidebar->getImage()}}" href="{{$sidebar->link}}" class="card-img-top" alt="pub" style="width: 100%; height: 80%;">
  <div class="card-body">
    <p class="card-text">{!! $sidebar->description !!}</p>
    <a href="{{$sidebar->link}}" class="btn btn-primary" style="background-color: {{ $annonce->button_color }}; border-color: {{ $annonce->button_color }}; ">{{$sidebar->Titre}}</a>
  </div>
</div> 
@endforeach
@endif
</section>

@if($videoBeforeActu->isNotEmpty())
@foreach($videoBeforeActu as $video)
<div class="container-fluid px-0">
<div class="embed-responsive embed-responsive-16by9" >
  <iframe class="embed-responsive-item" src="{{ $video->link }}" style="width: 100%; height:70vh;" allowfullscreen></iframe>
</div>
</div>
@endforeach
@endif

@if($annonceBeforeActu->isNotEmpty())
@foreach($annonceBeforeActu as $annonce)
<section class="py-6">
  <div class="container">
    <div class="position-relative pt-8 px-8 bg-primary rounded-3">
 
      <div class="row">
        <div class="col-12 col-lg-6 pb-8 d-flex flex-column">
          <h2 class="display-5 mb-4 text-warning">
            <span>{{$annonce->Titre}}</span>
            <span class="text-white">{{$annonce->SousTitre}}</span>
          </h2>
          <p class="mw-md mb-8 mb-lg-24 text-light">{{$annonce->description}}</p>
          @if(!empty($annonce->Boutton))
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" href="{{ $annonce->link }}" style="background-color: {{ $annonce->button_color }}; border-color: {{ $annonce->button_color }}; ">
              <span>{{$annonce->Boutton}}</span>
            </a>
          </div>
          @endif
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-end h-100">
          <img class="img-fluid mw-lg-md" src="{{$annonce->getImage()}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@if($cardsBeforeActu->isNotEmpty())
<section class="py-20">
  <div class="container">
    <div class="row">
    @foreach($cardsBeforeActu as $card)
      <div class="col-12 col-lg-6 mb-6 mb-lg-0">
        <div class="h-100" style="background-image: url('{{$card->getImage()}}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
          <div class="ps-8 pe-8 pe-lg-0 ps-lg-24 pt-24 pb-52 mw-md">
          <h2 class="mt-6 mb-12">{{$card->Titre}}</h2>  
          <span class="mb-4 h6">{{$card->description}}</span>
            <div>
            <a class="btn btn-primary" href="{{$card->link}}" style="background-color: {{ $card->button_color }}; border-color: {{ $card->button_color }}; ">{{$card->Boutton}}</a></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif


		  
<!--End espace pub before Actu-->

          <!-- Actualites area start  -->
          <section class="blog-area section-spacing style-1">
            <div class="section-lines">
              <div class="container">
                <div class="line-area">
                  <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                    <div class="line line-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title" style="color:#005151; font-size: 40px;font-weight:900;">{{$TitreActualites}}</h2>
                  </div>
                  <div class="subtitle-wrapper has_fade_anim" data-delay=".35" >
                    <a href="{{ route('Actualites') }}" class="section-subtitle" style="font-weight:900;">{{$ButtonActualites}}</a>
                  </div>
                </div>
              </div>
              <div class="blog-wrapper-area fix">
                <div class="blog-wrapper">

              
                
                @foreach($actualiteshome as $actualite)
                <x-actualite-item :actualite="$actualite"></x-actualite-item>
                @endforeach

              

                  </div>
                </div>
              </div>
           
          </section>
          <!-- Actualites area end  -->

<!--Start espace pub after Actu-->

<!--End espace pub after Actu-->

          <!-- References start  -->
          <div class="brand-area">
            <div class="container">
              <div class="brand-inner">
                <div class="brand-text">
                  <div class="brand-text-title-wrapper" >  <!--style="padding-top:50px;"-->
                    <h2 class="title" style="font-weight:900; font-size:23px; color:rgb(0, 81, 81);">{{$TitrePartenaire}}</h2>
                  </div>
                </div>
                <div class="brand-logos">
                  <div class="swiper corporate-brand-slider-active">
                    <div class="swiper-wrapper">

                    @foreach($partenaires as $partenaire)
                    <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ '/storage/'.$partenaire->Image}}" alt="{{$partenaire->partenaire}}">
                        </div>
                      </div>
                    @endforeach

                     <!-- <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ url('assets/imgs/brand/img-r-1.webp') }}" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ url('assets/imgs/brand/img-r-2.webp') }}" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ url('assets/imgs/brand/img-r-3.webp') }}" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ url('assets/imgs/brand/img-r-4.webp') }}" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ url('assets/imgs/brand/img-r-5.webp') }}" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ url('assets/imgs/brand/img-r-6.webp') }}" alt="partner-logo">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="brand-logo">
                          <img src="{{ url('assets/imgs/brand/img-r-5.webp') }}" alt="partner-logo">
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="line-horizontal"></div>
          </div>
          <!-- References area end  -->

        <!--  Start espace pub before footer-->


        @php
$bannerBF = $Beforefooter->where('Type', 'Banner');
$sidebarBF = $Beforefooter->where('Type', 'Sidebar');
$videoBF = $Beforefooter->where('Type', 'Video');
$annonceBF = $Beforefooter->where('Type', 'Annoce');
$cardsBF = $Beforefooter->where('Type', 'Cards');
@endphp

@if($bannerBF->isNotEmpty())
    @foreach($bannerBF as $banner)
    <section class="py-6">
  <div class="container">
      @if(empty($bannerBF->background))
	 <div class="position-relative pt-8 px-8 bg-secondary rounded-3">
	  @else
    <div class="position-relative pt-8 px-8 rounded-3" style="background-color:{{$banner->background}};">
      @endif
      <button class="btn position-absolute top-0 end-0 me-4 mt-4">
        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.5 11.5C14.3284 11.5 15 10.8284 15 10C15 9.17157 14.3284 8.5 13.5 8.5C12.6716 8.5 12 9.17157 12 10C12 10.8284 12.6716 11.5 13.5 11.5Z" fill="white"></path>
          <path d="M6.5 11.5C7.32843 11.5 8 10.8284 8 10C8 9.17157 7.32843 8.5 6.5 8.5C5.67157 8.5 5 9.17157 5 10C5 10.8284 5.67157 11.5 6.5 11.5Z" fill="white"></path>
        </svg>
      </button>
      <div class="row">
        <div class="col-12 col-lg-6 pb-8 d-flex flex-column align-items-center justify-content-center text-center ">
          <h6 class="mb-4 text-white">{{ $banner->Titre }}</h6>
          <p class="mw-md mb-8 mb-lg-24 text-light">{{ $banner->SousTitre }}</p>
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" style="background-color: {{ $banner->button_color }}; border-color: {{ $banner->button_color }}; " href="{{$banner->link}}">
              <span class="me-2">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.50015 1.5H11.5002C11.6328 1.5 11.7599 1.55268 11.8537 1.64645C11.9475 1.74021 12.0002 1.86739 12.0002 2V4.83333C12.0002 4.94152 11.9651 5.04679 11.9002 5.13333L10.6002 6.86667C10.5352 6.95321 10.5002 7.05848 10.5002 7.16667V14C10.5002 14.1326 10.4475 14.2598 10.3537 14.3536C10.2599 14.4473 10.1328 14.5 10.0002 14.5H6.00015C5.86754 14.5 5.74037 14.4473 5.6466 14.3536C5.55283 14.2598 5.50015 14.1326 5.50015 14V7.16667C5.50015 7.05848 5.46506 6.95321 5.40015 6.86667L4.10015 5.13333C4.03524 5.04679 4.00015 4.94152 4.00015 4.83333V2C4.00015 1.86739 4.05283 1.74021 4.1466 1.64645C4.24037 1.55268 4.36754 1.5 4.50015 1.5V1.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M8.00015 7.5V9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M4.00015 4H12.0002" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg> 
               
              </span>
              <span>{{ $banner->Boutton }}</span>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-end h-100">
          <img class="img-fluid mw-lg-md" src="{{ $banner->getImage() }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif


@if($sidebarBF->isNotEmpty())
@foreach($sidebarBF as $sidebar)
<div class="card" style="width: 18rem;">
  <img src="{{$sidebar->getImage()}}" href="{{$sidebar->link}}" class="card-img-top" alt="pub" style="width: 100%; height: 80%;">
  <div class="card-body">
    <p class="card-text">{!! $sidebar->description !!}</p>
    <a href="{{$sidebar->link}}" class="btn btn-primary" style="background-color: {{ $sidebar->button_color }}; border-color: {{ $sidebar->button_color }}; ">{{$sidebar->Titre}}</a>
  </div>
</div> 
@endforeach
@endif

@if($videoBF->isNotEmpty())
@foreach($videoBF as $video)
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="{{ $video->link }}" allowfullscreen></iframe>
</div>
@endforeach
@endif

@if($annonceBF->isNotEmpty())
@foreach($annonceBF as $annonce)
<section class="py-6">
  <div class="container">
    <div class="position-relative pt-8 px-8  rounded-3" style="background-color: {{ $annonce->background }}; ">
 
      <div class="row">
        <div class="col-12 col-lg-6 pb-8 d-flex flex-column">
          <h2 class="display-5 mb-4 text-warning">
            <span>{{$annonce->Titre}}</span>
            <span class="text-white">{{$annonce->SousTitre}}</span>
          </h2>
          <p class="mw-md mb-8 mb-lg-24 text-light">{{$annonce->description}}</p>
          @if(!empty($annonce->Boutton))
          <div>
            <a class="btn btn-danger d-inline-flex align-items-center" style="background-color: {{ $annonce->button_color }}; border-color: {{ $annonce->button_color }}; " href="{{ $annonce->link }}">
              <span>{{$annonce->Boutton}}</span>
            </a>
          </div>
          @endif
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-end h-100">
          <img class="img-fluid mw-lg-md" src="{{$annonce->getImage()}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@if($cardsBF->isNotEmpty())
<section class="py-20">
  <div class="container">
    <div class="row">
    @foreach($cardsBF as $card)
      <div class="col-12 col-lg-6 mb-6 mb-lg-0">
        <div class="h-100" style="background-image: url('{{$card->getImage()}}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
          <div class="ps-8 pe-8 pe-lg-0 ps-lg-24 pt-24 pb-52 mw-md">
            <span class="mb-4 h6">{{$card->Titre}}</span>
            <h2 class="mt-6 mb-12">{{$card->description}}</h2>
            <a class="btn btn-primary" href="{{$card->link}}" style="background-color: {{ $card->button_color }}; border-color: {{ $card->button_color }}; ">{{$card->Boutton}}</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif


<!--End espace pub after footer-->


        </main>
 

        
        @include('partials.footer')


  <!-- All JS files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

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
  <script src="{{ url('assets/js/man.js') }}"></script>
  <script src="{{ url('assets/js/error-handling.js') }}"></script>
  <script src="{{ url('assets/js/wc-cursor.js') }}"></script>
  <script src="{{ url('assets/js/offcanvas.js') }}"></script>

  

  <script>



 // intro slider 
 /*if (('.baner-active-1').length) {
      var baner_active = new Swiper(".baner-active-1", {
        pagination: {
          el: ".spagination-style-1",
          type: "fraction",
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        mousewheel: false,
        pagination: {
          el: '.pagination-style-1',
          type: 'fraction',
          clickable: true,

          renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' + ' <span class="dash"></span> ' + '<span class="' + totalClass + '"></span>';
          }
        },
      });
    }

    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-1",
          prevEl: ".swiper-button-prev.style-1",
        }
      });
    }  */

    // corporate_brand_slider_active
    if ('.corporate-brand-slider-active') {
      var corporate_brand_slider_active = new Swiper(".corporate-brand-slider-active", {
        slidesPerView: 6,
        loop: true,
        autoplay: true,
        spaceBetween: 60,
        speed: 3000,
        autoplay: {
          delay: .1,
          disableOnInteraction: false,
        },
        breakpoints: {
          // when window width is >= 320px
          375: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 4,
            spaceBetween: 40
          },
          // when window width is >= 1366px
          1366: {
            slidesPerView: 6,
          },
        }
      });
    }
    // testimonial_style_1
  /*  if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-3",
          prevEl: ".swiper-button-prev.style-3",
        }
      });
    } */


  </script>

</body>

</html>