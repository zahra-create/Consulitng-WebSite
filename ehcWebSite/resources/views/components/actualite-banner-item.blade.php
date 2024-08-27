<div class="swiper-slide" >
                  <div class="swiper-slide-item">
                    <div class="banner-area-bg bg-full zi--1">
                    <a href="{{route('details-actualites',$actualite)}}"><img src="{{$actualite->getImage()}}" alt="Actualite_Banner"></a>
                    </div>
                    <div class="container container-large" >
                      <div class="banner-inner" style="padding-top:300px;">
                        <div class="banner-content">
                        @foreach($actualite->categories as $category)
                        @endforeach
                          <span class="subtitle has_fade_anim " data-fade-from="right">{{$category->titre}}</span>
                          <div class="title-wrapper has_fade_anim" 
                            data-delay="0.35">
                            <h2 class="title" style=" font-weight:900;"><a href="{{route('details-actualites',$actualite)}}">{{$actualite->titre}}</a></h2>
                          </div>
                          <div class="text">
                            <div class="cf_text has_fade_anim" data-delay=".5" data-fade-from="right">
                              <p class="has-top-line">{{$actualite->getFormatedDate()}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.2/color-thief.umd.js"></script>
<script>

   document.addEventListener("DOMContentLoaded", function() {
    const image = document.querySelector('.banner-area-bg img');
    const colorThief = new ColorThief();
    
    if (image.complete) {
        applyTextColor(image);
    } else {
        image.addEventListener('load', function() {
            applyTextColor(image);
        });
    }

    function applyTextColor(image) {
        const dominantColor = colorThief.getColor(image);
        const rgbColor = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

        // Determine if the color is light or dark
        const brightness = (dominantColor[0] * 299 + dominantColor[1] * 587 + dominantColor[2] * 114) / 1000;
        const textColor = brightness > 155 ? 'black' : 'white';

        // Apply the text color to your banner content
        document.querySelector('.banner-content .subtitle').style.color = textColor;
        document.querySelector('.banner-content .title').style.color = textColor;
        document.querySelector('.banner-content .text').style.color = textColor;
    }
});
</script>