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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/icomon.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-blog-details.css">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">




</head>


<body class="font-heading-hkgrotesk-bold">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="B" class="characters">B</span>
          <span data-text="I" class="characters">I</span>
          <span data-text="N" class="characters">N</span>
          <span data-text="O" class="characters">O</span>
          <span data-text="X" class="characters">X</span>
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
                        <h1 class="section-title large">Sitting with basic goodness top signs that time.</h1>
                      </div>
                    </div>
                  </div>
                  <div class="meta has_fade_anim" data-delay=".6">
                    <div class="meta-box">
                      <div class="icon">
                        <img src="assets/imgs/icon/user-green.webp" alt="">
                      </div>
                      <div class="content">
                        <p class="title">Written by</p>
                        <p class="text">Steven Dirkse</p>
                      </div>
                    </div>
                    <div class="meta-box">
                      <div class="icon">
                        <img src="assets/imgs/icon/date-green.webp" alt="">
                      </div>
                      <div class="content">
                        <p class="title">Post date</p>
                        <p class="text">29 Jan, 2024</p>
                      </div>
                    </div>
                    <div class="meta-box">
                      <div class="icon">
                        <img src="assets/imgs/icon/comment-green.webp" alt="">
                      </div>
                      <div class="content">
                        <p class="title">Comments</p>
                        <p class="text">4.2K</p>
                      </div>
                    </div>
                  </div>
                  <div class="thumb-main has_fade_anim" data-delay=".7">
                    <img src="assets/imgs/blog/blog-details1.webp" alt="blog image">
                  </div>
                  <div class="section-main-content">
                    <div class="social-meta-box has_fade_anim">
                      <div class="meta-item">
                        <img src="assets/imgs/icon/view-graph.webp" alt="icon">
                        <p>247</p>
                        <p>Views</p>
                      </div>
                      <div class="meta-item">
                        <img src="assets/imgs/icon/share.webp" alt="icon">
                        <p>14</p>
                        <p>Shares</p>
                      </div>
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                      </ul>
                    </div>
                    <div class="content-box-wrapper">
                      <div class="content-box">
                        <div class="text-wrapper has_fade_anim">
                          <p class="text">Myriam was first trained as a sculptor in Montreal and then in Helsinki,
                            Finland. She is now based in Quebec but works for clients all around the globe. From textile
                            design to murals, editorial illustrations and book covers, her style is recognized by her
                            simple and perfectly arranged shapes as well as her rich and vibrant color palette. Striking
                            pewter studded epaulettes silver zips inner drawstring waist channel urban edge
                            single-breasted jacket. Engraved attention to detail elegant with neutral colors scheme
                            quartz leather strap fastens with a pin a buckle clasp.</p>

                          <p class="text">However, the same reason also makes it messy. If someone is having a bad day,
                            we might see
                            it as a sign of tension or lack of investment in the project. For outsiders, lacking an
                            understanding of the complex dynamics of a team can lead to the wrong conclusions.</p>
                        </div>
                        <div class="quote-box has_fade_anim">
                          <div class="icon">
                            <img src="assets/imgs/icon/quote-dark.webp" alt="icon">
                          </div>
                          <div class="quote-text">
                            <p class="text">Effortless comfortable full leather lining eye-catching unique detail to the
                              toe low ‘cut-away’ sides clean and sleek harmony.</p>
                            <span class="author has-left-line">Adamson Janny</span>
                          </div>
                        </div>
                        <div class="text-wrapper has_fade_anim">
                          <p class="text">Beckoning a diverse audience of food lovers who may have never considered
                            trying dumplings before. The unique blend of bold quirkiness and personality sets this brand
                            apart, marking its own distinct place in the crowded world of bold font family. We love to
                            bring designs to life as a developer, and I aim to do this using whatever front end tools
                            are necessary.</p>
                        </div>
                        <div class="image-content has_fade_anim">
                          <div class="thumb">
                            <img src="assets/imgs/blog/blog-details2.webp" alt="">
                            <p class="text">Official consultancy </p>
                          </div>
                          <div class="text-wrapper">
                            <p class="text">Beckoning a diverse audience of food lovers who may have never considered
                              trying dumplings before. The unique blend of bold quirkiness and personality sets this
                              brand apart, marking its own distinct place in the crowded world of bold font family. We
                              love to bring designs to life as a developer, and I aim to do this using whatever front
                              end tools are necessary.</p>
                            <p class="text">Structured gripped tape invisible moulded cups for sauppor firm hold strong
                              powermesh
                              front liner sport detail. Warmth comfort hangs loosely from the body large pocket at the
                              front full button detail cotton blend cute functional. Bodycon skirts bright primary
                              colours punchy palette.</p>
                          </div>
                        </div>
                        <div class="feature-content has_fade_anim">
                          <h2 class="section-title">Custom experience</h2>
                          <div class="text-wrapper">
                            <p class="text">We had observers go into the workplace and we timed people’s activities to
                              the second. We’ve been to various workplaces, all high-tech companies. We wanted to look
                              at information workers. We had observers shadow each person for three and a half days each
                              and timed every activity to the second.</p>
                          </div>
                          <div class="feature-list">
                            <ul class="list-plus">
                              <li>Create the table lines here</li>
                              <li>Organise everything early thoroughly</li>
                              <li>Development</li>
                              <li>Shopify Development</li>
                            </ul>
                          </div>
                          <div class="text-wrapper">
                            <p class="text">Achieving deep work should be our goal in any team, but doing it in an
                              office setting can be challenging because of so many distractions. Asynchronous
                              communication in a remote setting is perfect for it. I’m not a fan of long reads with too
                              many unnecessary details, so I’ll “jump” into the subject right away. My guide consists of
                              several parts; thus, you can stop reading at any point when you understand that what you
                              have learned so far covers your needs at the moment, and you can go back/or jump forward
                              to any section when you want to refresh your memory or learn about the more complex
                              workflows. Let’s go!</p>
                            <p class="text">If they pick up a phone call, that’s the start time. When they put the phone
                              down, that’s
                              the stop time. When they turn to the Word application we get the start time and stop time.
                              We found people switched these activities on average of every three minutes and five
                              seconds.</p>
                          </div>
                        </div>
                        <div class="tags-wrapper has_fade_anim">
                          <div class="tags">
                            <a href="#" class="tag">Business</a>
                            <a href="#" class="tag">Consultant</a>
                            <a href="#" class="tag">Agency</a>
                            <a href="#" class="tag">Resource</a>
                          </div>
                        </div>
                      </div>
                      <div class="comment-box has_fade_anim">
                        <h2 class="section-title">Leave a Comment</h2>
                        <div class="text-wrapper">
                          <p class="text">Your email address will not be published. Required fields are marked</p>
                        </div>
                        <div class="comment-form-wrapper">
                          <form>
                            <div class="wc-single-input">
                              <label for="name" class="wc-form-label">Name</label>
                              <input type="text" id="name">
                            </div>
                            <div class="wc-single-input">
                              <label for="email" class="wc-form-label">Email</label>
                              <input type="text" id="email">
                            </div>
                            <div class="wc-single-input">
                              <label for="phone" class="wc-form-label">Subject</label>
                              <input type="text" id="phone">
                            </div>
                            <div class="wc-single-input">
                              <label for="message" class="wc-form-label">Message</label>
                              <textarea id="message" placeholder="Write your message here....."></textarea>
                            </div>
                            <div class="btn-wrapper">
                              <button type="submit" class="wc-btn-primary btn-text-flip"><span
                                  data-text="Submit Now">Submit
                                  Now</span><i class="fa-solid fa-caret-right"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- blog details area end  -->

          <!-- cta area start  -->
          @include('partials.disponibility')
          <!-- cta area end  -->

        </main>

        <!-- footer area start  -->
        @include('partials.footer')
        <!-- footer area end  -->

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