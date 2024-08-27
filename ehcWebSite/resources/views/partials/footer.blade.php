
<link rel="stylesheet" href="{{ url('assets/css/master-financial.css') }}">
<footer class="footer-area style-5">
    <div class="shape">
      <img src="{{ url('assets/imgs/shape/polygon.webp') }}" alt="polygon">
    </div>
    <div class="container">
      <div class="footer-menu">
        <div class="logo-wrapper">
          <a href="#"><img src="{{ url('assets/imgs/logo/logoEHC.png') }}" alt="site-logo"></a>
          <a href="#" class="scroll-up-btn"> <i class="icon-wcf-arrow-up-5"></i> <span>Go up</span> </a>
        </div>

        <div class="widget-item">
          <h3 class="widget-title">Contact</h3>
          <ul>

		  @foreach($contacts as $contact)
            @if($contact->nom === 'Numéro')
                <!-- Traitement spécifique pour les numéros -->
                <li><a href="tel:{{ $contact->lien }}">{{ $contact->lien }}</a></li>
            @elseif($contact->nom === 'Email')
                <!-- Traitement spécifique pour les emails -->
                <li><a href="mailto:{{ $contact->lien }}">{{ $contact->lien }}</a></li>
            @elseif($contact->nom === 'WhatsApp')
                <!-- Traitement spécifique pour WhatsApp -->
                <li><a href="https://wa.me/{{ $contact->lien }}" target="_blank">{{ $contact->nom }}</a></li>
			@endif
        @endforeach
          </ul>
        </div>
        <div class="widget-item">
          <h3 class="widget-title">Localisation</h3>
          <ul>
            <!--<li class="text">3 Rue du Calvon Bv Abdelmoumen- Casablanca</li>-->
	@foreach($localisations as $localisation)
        <li class="text">{{$localisation->lien}}</li>
    @endforeach
          </ul>
        </div>
        <!--<div class="widget-item subscribe-form-item">
          <div class="header">
            <h3 class="title-2">Newsletter</h3>
            <p>Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités.</p>
          </div>
          <form action="#" class="subscribe-form">
            <input type="email" placeholder="Enter votre email">
            <button type="submit" class="subscribe-btn">
              <i class="icon-wcf-paper-plane"></i></button>
          </form>
        </div> -->
        
      </div>
      <div class="footer-copy-wrapper">
        <div class="widget-item">
      <ul class="social-icons">
		 @foreach($contacts as $contact)
                @if($contact->nom === 'WhatsApp')
           <li><a href="https://wa.me/{{ $contact->lien }}" target="_blank"><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i></a></li>
                @elseif($contact->nom === 'facebook')           
         <li><a href="{{ $contact->lien }}"><i class="icon-wcf-facebook"></i></a></li>
		 @elseif($contact->nom === 'instagram')  
            <li><a href="{{ $contact->lien }}"><i class="icon-wcf-instragram"></i></a></li>
			@elseif($contact->nom === 'linkedIn')  
            <li><a href="{{ $contact->lien }}"><i class="icon-wcf-linkdin"></i></a></li>
			@elseif($contact->nom === 'youtube')
            <li><a href="{{ $contact->lien }}"><i class="icon-wcf-youtube"></i></a></li>	
     @endif
            @endforeach	
          </ul> 
        </div>
        <p class="copy-text"> &copy; 2024 <a href="#">Expert Humain Capital</a></p>
      </div>
    </div>
  </footer>
  <!-- footer end  -->