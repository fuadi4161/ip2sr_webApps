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
            <img src="web/images/Logowebipsr.v2.png" width="35px" /> IP2SR
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
                <li class="nav-item @@about__active active">
                    <a class="nav-link" href="{{ route('home.about')}}">About</a>
                </li>
                <li class="nav-item @@contact__active">
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
            <h2 class="title">About Us</h2>
        </div>
    </div>
</section>
<section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="web/images/background.png" alt="" class="img-fluid radius-image-full">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Our Resturant</h5>
                    <h3 class="title-big">Hello and Welcome to our restaurant! Right Ingredients for the Right Food</h3>
                    <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, fugiat consequatur voluptatem ad.</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-4" href="about.html"> Read More </a>

                    <a href="#small-dialog1" class="popup-with-zoom-anim play-view text-center position-absolute mt-md-5 mt-4">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span> 
                        </span>
                        See Our Story
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://www.youtube.com/embed/dCVEY88Fn1k" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- features -->
<section class="w3l-reasons py-5" id="how">
    <div class="main-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="title-small">Our process</h6>
                <h3 class="title-big">How We Work</h3>
            </div>
            <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                <div class="col-lg-3 col-sm-6 grids-feature">
                    <a href="#url" class="icon"><span class="fa fa-pie-chart"></span></a>
                    <h4><a href="#feature" class="title-head">Food Served Hot</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-cogs"></span></a>
                    <h4><a href="#feature" class="title-head">Ample options</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-glass"></span></a>
                    <h4><a href="#feature" class="title-head">In-House Brevery</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
                <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                    <a href="#url" class="icon"><span class="fa fa-motorcycle"></span></a>
                    <h4><a href="#feature" class="title-head">Fastest delivery</a></h4>
                    <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->

<!--/team-sec-->
<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h6 class="title-small">Experts and skillful</h6>
                <h3 class="title-big">Our Experienced Chefs</h3>
            </div>
            <div class="row team-row mt-md-5 mt-5">
                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="images/team1.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Luke jacobs</a>
                        <p>Experienced Chef</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="images/team3.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Claire olson</a>
                        <p>Experienced Chef</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="images/team2.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Phillip hunt</a>
                        <p>Manager</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="images/team4.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Sara grant</a>
                        <p>Experienced Staff</p>
                    </div>
                </div>
                <!-- end team member -->

            </div>
        </div>
</section>
<!--//team-sec-->
<!-- stats -->
<section class="w3_stats py-5" id="stats">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center">
            <h6 class="title-small">Our facts</h6>
            <h3 class="title-big">Why we are unique? Have a look.</h3>
        </div>
        <div class="w3-stats">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-download"></span>
                        <div class="timer count-title count-number mt-3" data-to="15100" data-speed="1500"></div>
                        <p class="count-text ">Total Downloads</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-bicycle"></span>
                        <div class="timer count-title count-number mt-3" data-to="19256" data-speed="1500"></div>
                        <p class="count-text ">Orders Served</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-smile-o"></span>
                        <div class="timer count-title count-number mt-3" data-to="12100" data-speed="1500"></div>
                        <p class="count-text ">Happy Customers</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-users"></span>
                        <div class="timer count-title count-number mt-3" data-to="2560" data-speed="1500"></div>
                        <p class="count-text ">Daily Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->


<!-- testimonials -->
<section class="w3l-clients-1" id="testimonials">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="heading align-self text-center">
                <h6 class="title-small">What our customers Say</h6>
                <h3 class="title-big mb-md-5 mb-4">Customer Testimonials</h3>
            </div>
            <!-- /grids -->
            <div class="testimonial-row py-md-4">
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Dennis wilson</h3>
                                        <p class="indentity">Customer </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Tommy sakura</h3>
                                        <p class="indentity">Customer </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Roy Linderson</h3>
                                        <p class="indentity">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="testi-stars">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <blockquote>
                                    <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora. consectetur
                                        adipisicing doloribus est elit. Non quae, fugiat consequatur voluptatem ad.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                        <h3>Mike Thyson</h3>
                                        <p class="indentity">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
<!-- //testimonials -->
    <!-- forms -->
    <section class="w3l-forms-9 py-5" id="">
        <div class="main-w3 py-lg-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="main-midd col-lg-8">
                        <h3 class="title-big">Do You want to Contact with us. Then Don't Hesitate!</h3>
                    </div>
                    <div class="main-midd-2 col-lg-4 mt-lg-0 mt-4 text-lg-right">
                        <a class="btn btn-white btn-style" href="{{ route('home.contact')}}"> Contact Us </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //forms -->
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