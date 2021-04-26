<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>IP2SR</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="web/css/style-starter.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1> <a class="navbar-brand" href="{{ route('home')}}">
            <img src="web/images/logowebipsr.v2.png" alt="burger logo"width="35px" /> IP2SR
            </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @@about__active">
                    <a class="nav-link" href="{{ route('home.about')}}">About</a>
                </li>
                <li class="nav-item @@contact__active active">
                    <a class="nav-link" href="{{ route('home.contact')}}">Contact</a>
                </li>
                <li class="nav-item dropdown @@pages__active">
                  @auth

                    @if( Auth::user()->profile_photo == null)
                    <a class="nav-link dropdown-toggle" id="Dropdownvar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="{{url('assets/images/avatars/default.png')}}" style="border-radius: 50%; width:34px;height:34px; margin-top:-7px;">
                    </a>
                    @else
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="{{url('assets/images/avatars/'. Auth::user()->profile_photo)}}" style="border-radius: 50%; width:34px;height:34px; margin-top:-7px;">
                    </a>
                    @endif


                  @else
                    <a class="nav-link dropdown-toggle" href="#" id="Dropdownvar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Account <span class="fa fa-angle-down"></span>
                    </a>
                  @endif
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      
                    @if (Route::has('login'))
                        
                            @auth
                                @role('super-admin')
                                <a href="{{ route('super.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                @endrole
                                @role('admin')
                                <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                @endrole
                                @role('editor')
                                <a href="{{ route('editor.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                @endrole
                                @role('user')
                                <a href="{{ route('user.dashboard') }}" class="text-sm text-gray-700 underline dropdown-item">Dashboard</a>
                                @endrole
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dropdown-item">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-sm text-gray-700 underline dropdown-item">Register</a>
                                @endif
                            @endif
                        
                    @endif

                  @auth
                    <div class="block px-4 py-2 text-xs text-warning">
                            {{ __('Action') }}
                        </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </form>
                  @endif
                </li>
                  <!--/search-right-->
                  <div class="search-right">
                      <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                      <!-- search popup -->
                      <div id="search" class="pop-overlay">
                          <div class="popup">
                              <h4 class="mb-3">Search here</h4>
                              <form action="error.html" method="GET" class="search-box">
                                  <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                      autofocus="">
                                  <button type="submit" class="btn btn-style btn-primary">Search</button>
                              </form>

                          </div>
                          <a class="close" href="#close">×</a>
                      </div>
                      <!-- /search popup -->
                  </div>
                  <!--//search-right-->
              </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Get in touch with us</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="mt-md-5 mt-4">Contact Address</h5>
                            <p><strong>Address :</strong> Jl. Kyai Raden Sahid ,RT01 RW09, Beteng, Bligo, Ngluwar, Magelang, Jawa Tengah</p>
                            <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 534894364">+12 534894364</a></p>
                            <p><strong>Email :</strong> <a href="mailto:sidorukunofficial.gmail.com">sidorukunofficial.gmail.com</a></p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1205.9979085256828!2d110.27034812922747!3d-7.691432070614236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af54aaa3b1c37%3A0x7f179d8eb0898853!2sGedung%20TEA%20(Tempat%20Evakuasi%20Akhir)%20Desa%20Bligo!5e1!3m2!1sid!2sid!4v1612567183150!5m2!1sid!2sid"
        frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div>
<!-- footer -->
@include('theme.footer')
<!-- //footer -->
<!-- copyright -->
<div class="cpy-right text-center py-4">
  <p>© 2020 Burger Bun. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a> </p>
</div>
<!-- //copyright -->

 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-level-up" aria-hidden="true"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->

<script src="web/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="web/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<script src="web/js/owl.carousel.js"></script><!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="web/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<script src="web/js/counter.js"></script>

<!-- gallery popup js -->
<script src="web/js/smartphoto.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sm = new SmartPhoto(".js-img-viwer", {
      showAnimation: false
    });
    // sm.destroy();
  });
</script>
<!-- //gallery popup js -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="web/js/bootstrap.min.js"></script>
<!-- //bootstrap-->

</body>

</html>