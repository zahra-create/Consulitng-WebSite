/***************************************************
==================== JS INDEX ======================
****************************************************
01. Sticky
02. Preloader
03. Magnific Image popup
04. Text Slider
05. Smooth active
06. Counter active
07. Progress Bar
08. Scroll Top
09. meanmenu active
10. Button Hover Animation
11. Pin Active
12. Image Reveal Animation
13. Sidebar Menu
14. Offcanvas Menu Off/On
15. Blog Share Pin
16. Switcher JS
17. Testimonial



****************************************************/

(function ($) {
  "use strict";


  // 01. Sticky 
  let header = document.querySelector('header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
      header.classList.add('sticky')
    } else {
      header.classList.remove('sticky')
    }
  })


  // Screen Width
  var device_width = window.screen.width;
  var overlay = document.querySelector('.overlay-switcher-close');


  // 02. Preloader
  $(document).ready(function () {
    $('#container').addClass('loaded');
    if ($('#container').hasClass('loaded')) {
      $('#preloader').delay(1000).queue(function () {
        $(this).remove();
      });
    }
  });


  // Register GSAP Plugins
  gsap.registerPlugin(ScrollTrigger);


  // 03. Magnific Image popup
  if ($('.image-popup').length && 'magnificPopup' in jQuery) {
    $('.image-popup').magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });
  }

  // Magnific Video popup
  if ($('.video-popup').length && 'magnificPopup' in jQuery) {
    $('.video-popup').magnificPopup({
      type: 'iframe',
    });

  }


  // 04. Text Slider
  var text_slider_option = document.querySelector(".text__slider");

  if (text_slider_option) {

    var text_slider_speed = 5000
    var text_slider_autoplay = true
    var loop_value = true
    var data_itemshow = "auto"

    if (text_slider_option.getAttribute("data-sliderSpeed")) {
      text_slider_speed = parseInt(text_slider_option.getAttribute("data-sliderSpeed"));
    }
    if (text_slider_option.getAttribute("data-autoPlay")) {
      text_slider_autoplay = text_slider_option.getAttribute("data-autoPlay")
    }

    if (text_slider_option.getAttribute("data-loop")) {
      loop_value = text_slider_option.getAttribute("data-loop")
    }
    if (text_slider_option.getAttribute("data-itemShow")) {
      data_itemshow = text_slider_option.getAttribute("data-itemShow")
    }


    if (text_slider_autoplay == 'true') {
      var text_slider = new Swiper(".text__slider", {
        loop: loop_value,
        speed: text_slider_speed,
        allowTouchMove: false,
        slidesPerView: data_itemshow,
        slidesPerGroup: 10,
        spaceBetween: 20,
        autoplay: {
          delay: 0,
          disableOnInteraction: true,
        }
      });
    }
    else {
      var text_slider = new Swiper(".text__slider", {
        loop: loop_value,
        speed: text_slider_speed,
        allowTouchMove: false,
        slidesPerView: data_itemshow,
        slidesPerGroup: 10,
        spaceBetween: 20,
        autoplay: false,
      });
    }
  };


  // 05. Smooth active
  if (device_width > 767) {
  if (document.querySelector("#has_smooth").classList.contains("has-smooth")) {
    const smoother = ScrollSmoother.create({
      smooth: 0.5,
      effects: device_width < 1025 ? false : true,
      smoothTouch: 0.1,
      normalizeScroll: false,
      ignoreMobileResize: true,
    });
  }

  }

  // 06. Counter active
  if ('counterUp' in window) {
    const skill_counter = window.counterUp.default
    const skill_cb = entries => {

      entries.forEach(entry => {
        const el = entry.target
        if (entry.isIntersecting && !el.classList.contains('is-visible')) {
          skill_counter(el, {
            duration: 1500,
            delay: 16,
          })
          el.classList.add('is-visible')
        }
      })
    }

    const IO = new IntersectionObserver(skill_cb, {
      threshold: 1
    })

    const els = document.querySelectorAll('.wc-counter');
    els.forEach((el) => {
      IO.observe(el)
    });
  }


  // 07. Progress Bar
  if ($('.progress__label').length) {
    $('.progress__label').progressBar({
      percentage: true,
      animation: true,
      height: "2",
      barColor: "#E8BF96",
      shadow: true,
    });
  }

  if ($('.progress__label-2').length) {
    $('.progress__label-2').progressBar({
      height: "2",
      percentage: true,
      animation: true,
      shadow: true,
      barColor: "#FD8F77",
      backgroundColor: "#44454A",
    });

    var progress_item_2 = document.querySelectorAll('.progress__item-2 .sonny_progressbar');
    progress_item_2.forEach(elem => {
      var prog_val = elem.getAttribute('data-width');
      elem.childNodes[1].childNodes[2].style.left = prog_val + '%';
    });
  }


  // 08. Scroll Top
  let scroll_top = document.getElementById("scroll_top");
  if (scroll_top) {
    window.onscroll = function () {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        scroll_top.classList.add('showed');
      } else {
        scroll_top.classList.remove('showed');
      }
    };

    scroll_top.addEventListener('click', function () {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    });
  }

  // 09. meanmenu active
  $('.offcanvas__menu').meanmenu({
    meanScreenWidth: "5000",
    meanMenuContainer: '.offcanvas__menu-wrapper',
    meanMenuCloseSize: '28px',
  });

  // meanmenu activition 
  $('.main-menu').meanmenu({
    meanScreenWidth: "1199",
    meanMenuContainer: '.offcanvas__menu-wrapper',
    meanMenuCloseSize: '28px',
  });



  const all_btn = gsap.utils.toArray(".btn-move");
  const all_btn_cirlce = gsap.utils.toArray(".btn-item");

  all_btn.forEach((btn, i) => {
    $(btn).mousemove(function (e) {
      callParallax(e);
    });
    function callParallax(e) {
      parallaxIt(e, all_btn_cirlce[i], 80);
    }

    function parallaxIt(e, target, movement) {
      var $this = $(btn);
      var relX = e.pageX - $this.offset().left;
      var relY = e.pageY - $this.offset().top;

      gsap.to(target, 0.3, {
        x: ((relX - $this.width() / 2) / $this.width()) * movement,
        y: ((relY - $this.height() / 2) / $this.height()) * movement,
        scale: 1.2,
        ease: Power2.easeOut,
      });
    }
    $(btn).mouseleave(function (e) {
      gsap.to(all_btn_cirlce[i], 0.3, {
        x: 0,
        y: 0,
        scale: 1,
        ease: Power2.easeOut,
      });
    });
  });

  // 10. Button Hover Animation
  var btn_hover_all = document.querySelectorAll(".btn-hover-bgchange");

  if (btn_hover_all) {
    for (const ele of btn_hover_all) {
      var newSpan = document.createElement("span");
      ele.appendChild(newSpan);
    }

    $('.btn-hover-bgchange').on('mouseenter', function (e) {
      var x = e.pageX - $(this).offset().left;
      var y = e.pageY - $(this).offset().top;

      $(this).find('span').css({
        top: y,
        left: x,
      });
    });

    $('.btn-hover-bgchange').on('mouseout', function (e) {
      var x = e.pageX - $(this).offset().left;
      var y = e.pageY - $(this).offset().top;

      $(this).find('span').css({
        top: y,
        left: x,
      });
    });
  }


  // 11. Pin Active
  var device_widthh = window.innerWidth; 
  var pinElement = document.getElementById('pinElement');
  //var pin_fixed = document.querySelector('.pin__element');

  if (device_widthh <= 991) {
    // Si l'écran est petit, retirez la classe 'pin__element' et désactivez ScrollTrigger
    pinElement.classList.remove('pin__element');
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());
}
 // if (pin_fixed && device_width > 991)
   else  {         
    // Si l'écran est grand, ajoutez la classe 'pin__element' et activez ScrollTrigger
    pinElement.classList.add('pin__element');

    gsap.to(".pin__element", {
      scrollTrigger: {
        trigger: ".pin__area",
        pin: ".pin__element",
        start: "top top",
        end: "bottom bottom",
        pinSpacing: false,
      }
    });
  }

  var schedule_fixed = document.querySelector('.pin__elem');
  if (schedule_fixed && device_width > 991) {

    gsap.utils.toArray(".pin__elem").forEach((panel, i, array) => {

      if (i === array.length - 1) {
        return;
      }

      ScrollTrigger.create({
        trigger: panel,
        start: "top top",
        pin: true,
        pinSpacing: false
      });

    });


  }




  function mousemoveHandler(e) {
    try {
      const target = e.target;

      let tl = gsap.timeline({
        defaults: {
          x: e.clientX,
          y: e.clientY,
        }
      })

      // Main Cursor Moving 
      tl.to(".cursor1", {
        ease: "power2.out"
      })
      // .to(".cursor2", {
      //   ease: "power2.out"
      // }, "-=0.4")

    } catch (error) {
      console.log(error)
    }
  }
  document.addEventListener("mousemove", mousemoveHandler);


  // Cursor Default
  // setTimeout(cursorDefaultHide, 1000);

  function cursorDefaultHide() {
    var cursor_default_hide = document.querySelector('.wc-cursor');
    cursor_default_hide.style.display = "none";
  }

  // 12. Image Reveal Animation
  let img_anim_reveal = document.querySelectorAll(".img_anim_reveal");

  img_anim_reveal.forEach((img_reveal) => {
    let image = img_reveal.querySelector("img");
    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: img_reveal,
        start: "top 50%",
      }
    });

    tl.set(img_reveal, { autoAlpha: 1 });
    tl.from(img_reveal, 1.5, {
      xPercent: -100,
      ease: Power2.out
    });
    tl.from(image, 1.5, {
      xPercent: 100,
      scale: 1.3,
      delay: -1.5,
      ease: Power2.out
    });
  });

  // 13. Sidebar Menu
  let sidebar_links = gsap.utils.toArray(".sidebar-menu li a");
  sidebar_links.forEach(a => {
    let element = document.querySelector(a.getAttribute("href")),
      linkST = ScrollTrigger.create({
        trigger: element,
        start: "top top",
      });
    ScrollTrigger.create({
      trigger: element,
      start: "top center",
      end: "bottom center",
      onToggle: self => self.isActive && setActive(a)
    });
    a.addEventListener("click", e => {
      e.preventDefault();
      gsap.to(window, {
        duration: 0.1,
        scrollTo: linkST.start,
        overwrite: "auto"
      });
    });
  });

  function setActive(link) {
    sidebar_links.forEach(el => el.classList.remove("active"));
    link.classList.add("active");
  }


  // 14. Offcanvas Menu Off/On
  var open_offcanvas = document.getElementById("open_offcanvas");
  var close_offcanvas = document.getElementById("close_offcanvas");

  if (open_offcanvas && close_offcanvas) {
    open_offcanvas.addEventListener('click', function () {
      document.querySelector('.offcanvas-area').style.opacity = '1';
      document.querySelector('.offcanvas-area').style.visibility = 'visible';
    });

    close_offcanvas.addEventListener('click', function () {
      document.querySelector('.offcanvas-area').style.opacity = '0';
      document.querySelector('.offcanvas-area').style.visibility = 'hidden';
    });
  }

  // 15. Blog Share Pin
  var blog_pin_wrapper = document.querySelector(".blog_pin_wrapper");

  if (blog_pin_wrapper && device_width > 767) {
    gsap.to(".blog_share_pin", {
      scrollTrigger: {
        trigger: ".blog_pin_wrapper",
        pin: ".blog_share_pin",
        start: "top top",
        end: "bottom bottom",
      },
      marginTop: 20,
    });
  }



  // 16. Switcher JS
  var available = $('#switcher_open').on('click', function () {
    $(this).hide();
    $('#switcher_close').show();
    $('.switcher__icon').css('right', '280px');
    $('.switcher__items').css({
      'right': '0',
    });
    overlay.classList.add('show-overlay');
  });

  var closeicon = $('#switcher_close').on('click', function () {
    $(this).hide();
    $('#switcher_open').show();
    $('.switcher__icon').css('right', '0');
    $('.switcher__items').css({
      'right': '-280px',
    });
    overlay.classList.remove('show-overlay');
  });

  $('.overlay-switcher-close').on('click', function () {
    available.hide();
    closeicon.hide();

    if (header_search) {
      header_search.classList.remove('visible');
      search_close.style.display = 'none';
      search_icon.style.display = 'block';
    }

    $('#switcher_open').show();
    $('.switcher__icon').css('right', '0');
    $('.switcher__items').css({
      'right': '-280px',
    });
    overlay.classList.remove('show-overlay');

  });



  // Mode JS
  $('.mode-type button').on('click', function (e) {
    $(this).addClass('active').siblings().removeClass('active');

    var mode_val = $('.mode-type button.active').attr('data-mode');
    if (mode_val == 'dark') {
      $('body').addClass('dark');
    } else {
      $('body').removeClass('dark');
    }
  });

  // Layout JS
  $('.layout-type button').on('click', function (e) {
    $(this).addClass('active').siblings().removeClass('active');

    var mode_val = $('.layout-type button.active').attr('data-mode');
    if (mode_val == 'box-layout') {
      $('#smooth-content').addClass('box-layout');
    } else {
      $('#smooth-content').removeClass('box-layout');
    }
  });

  // Language JS
  $('.lang_dir button').on('click', function (e) {
    $(this).addClass('active').siblings().removeClass('active');

    var dir_val = $('.lang_dir button.active').attr('data-mode');
    if (dir_val == 'rtl') {
      $('body').addClass('dir-rtl');
    } else {
      $('body').removeClass('dir-rtl');
    }
  });



  // Cursor JS
  $('#cursor_style').on('change', function () {
    var cursor_val = $(this).val();

    if (cursor_val == '1') {
      $('.cursor1').hide();
      $('.cursor2').hide();
    } else {
      $('.cursor1').show();
      $('.cursor2').show();
    }
  });


  $("a[href='#top']").on('click', function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });


  // go to section 
  if ($('#triggeredButton').length) {
    var triggeredButton = document.querySelector('#triggeredButton');
    const jumpSection = ScrollTrigger.create({
      trigger: "#triggeredSection",
      start: "top top",
      end: "top top",
      pin: true,
      scrub: true
    });
    triggeredButton.addEventListener("click", () => {
      gsap.fromTo(
        window,
        { scrollTo: jumpSection.start },
        { scrollTo: jumpSection.end, duration: .5, ease: "power1.out" }
      );
    });
  }

  // 17. Testimonial
  if ($('.b-testimonial-active').length) {
    var bTestiononial = new Swiper(".b-testimonial-active", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      pagination: {
        el: '.b-ts-pagination',
        type: 'fraction',
        formatFractionCurrent: function (number) {
          return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
          return ('0' + number).slice(-2);
        },
        renderFraction: function (currentClass, totalClass) {
          return '<span class="' + currentClass + '"></span>' +
            ' <span class="dash"></span> ' +
            '<span class="' + totalClass + '"></span>';
        }
      }
    });
  }


  if ('.testimonial.style-2') {
    var testimonial_style_2 = new Swiper(".testimonial.style-2", {
      slidesPerView: 1,
      speed: 1000,
      navigation: {
        nextEl: ".swiper-button-next.style-2",
        prevEl: ".swiper-button-prev.style-2",
      },

    });
  }

  const toggle_switcher = function () {

    let $scope = $('.wcf__toggle_switcher');

    const checked = $("input", $scope);
    const toggle_pane = $(".toggle-pane", $scope);
    const toggle_label = $(".before_label, .after_label", $scope);

    checked.change(function () {
      toggle_pane.toggleClass('show');
      toggle_label.toggleClass('active');
    })
  }

  toggle_switcher();



})(jQuery);